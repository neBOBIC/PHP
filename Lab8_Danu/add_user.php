<?php include "connexion.php"; ?>
<link rel="stylesheet" href="style.css">

<h2>Adauga utilizator</h2>

<form method="POST">
    <input type="text" name="nume" placeholder="Nume" required>
    <input type="text" name="prenume" placeholder="Prenume" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="nr_telefon" placeholder="Telefon">
    <button type="submit">Adauga</button>
</form>

<?php
if ($_POST) {
    $n = $_POST['nume'];
    $p = $_POST['prenume'];
    $e = $_POST['email'];
    $t = $_POST['nr_telefon'];
    $d = date("Y-m-d");

    $conn->query("INSERT INTO utilizatori (nume, prenume, email, nr_telefon, data_inregistrare) VALUES ('$n', '$p', '$e', '$t', '$d')");
    echo "Utilizator adaugat";
}
?>
