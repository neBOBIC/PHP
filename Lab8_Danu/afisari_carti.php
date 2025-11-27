<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
include "connexion.php";
?>

<h2>Carti Fictiune</h2>
<table>
<tr>
    <th>ID</th>
    <th>Titlu</th>
    <th>Autor</th>
    <th>An</th>
</tr>
<?php
$r = $conn->query("SELECT * FROM carti_biblioteca WHERE gen_literar='Fictiune'");
while ($c = $r->fetch_assoc()) {
    echo "<tr>
            <td>".$c['id']."</td>
            <td>".$c['titlu_carte']."</td>
            <td>".$c['autor']."</td>
            <td>".$c['an_publicare']."</td>
          </tr>";
}
?>
</table>

<h2>Carti dupa anul 2000</h2>
<table>
<tr>
    <th>ID</th>
    <th>Titlu</th>
    <th>Autor</th>
    <th>An</th>
</tr>
<?php
$r = $conn->query("SELECT * FROM carti_biblioteca WHERE an_publicare > 2000");
while ($c = $r->fetch_assoc()) {
    echo "<tr>
            <td>".$c['id']."</td>
            <td>".$c['titlu_carte']."</td>
            <td>".$c['autor']."</td>
            <td>".$c['an_publicare']."</td>
          </tr>";
}
?>
</table>

<h2>Carti >300 pagini si disponibile</h2>
<table>
<tr>
    <th>ID</th>
    <th>Titlu</th>
    <th>Pagini</th>
    <th>Disponibil</th>
</tr>
<?php
$r = $conn->query("SELECT * FROM carti_biblioteca WHERE nr_pagini > 300 AND stare_disponibilitate=1");
while ($c = $r->fetch_assoc()) {
    echo "<tr>
            <td>".$c['id']."</td>
            <td>".$c['titlu_carte']."</td>
            <td>".$c['nr_pagini']."</td>
            <td>".$c['stare_disponibilitate']."</td>
          </tr>";
}
?>
</table>

<h2>Stergere carti fara autor</h2>
<?php
$conn->query("DELETE FROM carti_biblioteca WHERE autor IS NULL");
echo "Sterse";
?>

</body>
</html>