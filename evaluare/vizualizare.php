<?php
include("connexion.php");

$sql = "SELECT nume, prenume, telefon, email, produs, cantitate FROM `comenzi`";
$result = mysqli_query($conexiune, $sql);
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vizualizare.css">
    <title>Vizualizare Comenzi</title>
</head>
<body>
    <a href="index.php" class="home-link">Home</a>

    <img src="dotSTORE.png" alt="Logo magazin" class="logo">
    <h1>Lista Comenzilor</h1>

    <table>
        <tr>
            <th>Nume</th>
            <th>Prenume</th>
            <th>Telefon</th>
            <th>Email</th>
            <th>Produs</th>
            <th>Cantitate</th>
        </tr>

        <?php
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['nume']}</td>
                        <td>{$row['prenume']}</td>
                        <td>{$row['telefon']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['produs']}</td>
                        <td>{$row['cantitate']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Nu există comenzi înregistrate.</td></tr>";
        }
        ?>
    </table>

    <a href="comanda.php" class="btn">Plasează Comandă</a>
</body>
</html>

<?php
mysqli_close($conexiune);
?>
