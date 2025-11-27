<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/raport.css">
    <title>Rapoarte</title>
</head>
<body>

<a href="index.php">
    <p>Home</p>
</a>

<h1>Rapoarte Biblioteca</h1>


<h2>1. Căutarea cărților cu preț mai mare decât valoarea introdusă</h2>

<form method="POST">
    <input type="number" name="pret_min" step="0.01" placeholder="Introdu preț minim">
    <button type="submit" name="cauta_pret">Caută</button>
</form>

<?php
include("connexion.php");

if(isset($_POST['cauta_pret'])){
    $pret_min = $_POST['pret_min'];

    $sql = "SELECT * FROM carti WHERE pret > '$pret_min'";
    $res = mysqli_query($conexiune, $sql);

    echo "<table>
            <tr>
                <th>Titlu</th>
                <th>Autor</th>
                <th>Editura</th>
                <th>Preț</th>
            </tr>";

    while($row = mysqli_fetch_array($res)){
        echo "<tr>
                <td>".$row['1']."</td>
                <td>".$row['2']."</td>
                <td>".$row['3']."</td>
                <td>".$row['4']."</td>
              </tr>";
    }

    echo "</table>";
}
?>

<h2>2. Cititori care nu au returnat cărțile</h2>

<?php
$azi = date("Y-m-d");

$sql2 = "
SELECT c.nume, c.prenume, c.telefon, c.data_imprumut, c.data_returnare, ca.titlu 
FROM cititori c
JOIN carti ca ON c.id_carte = ca.id_carte
WHERE c.data_returnare IS NULL OR c.data_returnare = ''
";

$res2 = mysqli_query($conexiune, $sql2);

echo "<table>
        <tr>
            <th>Nume</th>
            <th>Prenume</th>
            <th>Telefon</th>
            <th>Carte</th>
            <th>Data împrumut</th>
        </tr>";

while($row = mysqli_fetch_assoc($res2)){
    echo "<tr>
            <td>".$row['nume']."</td>
            <td>".$row['prenume']."</td>
            <td>".$row['telefon']."</td>
            <td>".$row['titlu']."</td>
            <td>".$row['data_imprumut']."</td>
          </tr>";
}

echo "</table>";
?>

<h2>3. Lista editurilor cu numărul total de cărți publicate</h2>

<?php
$sql3 = "
SELECT editura, COUNT(id_carte) AS total_carti
FROM carti
GROUP BY editura
ORDER BY total_carti DESC
";

$res3 = mysqli_query($conexiune, $sql3);

echo "<table>
        <tr>
            <th>Editura</th>
            <th>Total Cărți</th>
        </tr>";

while($row = mysqli_fetch_assoc($res3)){
    echo "<tr>
            <td>".$row['editura']."</td>
            <td>".$row['total_carti']."</td>
          </tr>";
}

echo "</table>";
?>

</body>
</html>
