<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comanda</title>
    <link rel="stylesheet" href="comanda.css">
</head>
<body>

    <a href="index.php">Home</a>

    <div class="title">
        <h1>Bine ai venit la pagina de plasare a comenzii</h1>
        <p>Completeaza formularul pentru a plasa o comanda</p>
    </div>

    <div class="form">
        <form action="comanda.php" method="POST">
            <div class="left">
                <label for="nume">Nume</label>
                <label for="prenume">Prenume</label>
                <label for="numar">Numar de Contact</label>
                <label for="email">Email</label>
                <label for="produs">Produs</label>
                <label for="cantitate">Cantitate</label>
            </div>
            <div class="right">
                <input type="text" id="nume" name="nume" required placeholder="Nume">
                <input type="text" id="prenume" name="prenume" required placeholder="Prenume">
                <input type="text" id="numar" name="numar" required placeholder="Telefon" maxlength="9" pattern="\d{9}">
                <input type="email" id="email" name="email" required placeholder="Email">
                <input type="text" id="produs" name="produs" required placeholder="Produs">
                <input type="number" id="cantitate" name="cantitate" required placeholder="Cantitate">
                <button type="submit">Trimite</button>
            </div>
        </form>
    </div>
</body>
</html>

<?php

include 'connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $numar = $_POST['numar'];
    $email = $_POST['email'];
    $produs = $_POST['produs'];
    $cantitate = $_POST['cantitate'];

    $sql = "INSERT INTO comenzi (nume, prenume, telefon, email, produs, cantitate) VALUES ('$nume', '$prenume', '$numar', '$email', '$produs', '$cantitate')";

    if (mysqli_query($conexiune, $sql)) {
        echo "Comanda a fost înregistrată cu succes!";
    } else {
        echo "Eroare: " . $sql . "<br>" . mysqli_error($conexiune);
    }
}

?>