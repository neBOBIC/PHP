<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php include "connexion.php"; ?>

<h2>Utilizatori inregistrati in ultimele 30 de zile</h2>
<table>
<tr>
    <th>ID</th>
    <th>Nume</th>
    <th>Prenume</th>
    <th>Email</th>
    <th>Data</th>
</tr>
<?php
$r = $conn->query("SELECT * FROM utilizatori WHERE data_inregistrare >= CURDATE() - INTERVAL 30 DAY");
while ($u = $r->fetch_assoc()) {
    echo "<tr>
            <td>".$u['id']."</td>
            <td>".$u['nume']."</td>
            <td>".$u['prenume']."</td>
            <td>".$u['email']."</td>
            <td>".$u['data_inregistrare']."</td>
          </tr>";
}
?>
</table>

<h2>Email .edu</h2>
<table>
<tr>
    <th>ID</th>
    <th>Nume</th>
    <th>Prenume</th>
    <th>Email</th>
</tr>
<?php
$r = $conn->query("SELECT * FROM utilizatori WHERE email LIKE '%@%.edu'");
while ($u = $r->fetch_assoc()) {
    echo "<tr>
            <td>".$u['id']."</td>
            <td>".$u['nume']."</td>
            <td>".$u['prenume']."</td>
            <td>".$u['email']."</td>
          </tr>";
}
?>
</table>

<h2>Stergere utilizatori fara telefon</h2>
<?php
$conn->query("DELETE FROM utilizatori WHERE nr_telefon='' OR nr_telefon IS NULL");
echo "Utilizatori stersi";
?>

</body>
</html>