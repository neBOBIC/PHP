<?php
include("conexiune.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $email = $_POST['email'];
    $nr_telefon = $_POST['nr_telefon'];
    $data_inregistrare = $_POST['data_inregistrare'];

    $interogare = "INSERT INTO utilizatori (nume, prenume, email, nr_telefon, data_inregistrare) 
                   VALUES ('$nume', '$prenume', '$email', '$nr_telefon', '$data_inregistrare')";

    if (mysqli_query($conexiune, $interogare)) {
        echo "Utilizatorul a fost adaugat cu succes.";
    } else {
        echo "Eroare: " . $interogare . "<br>" . mysqli_error($conexiune);
    }

    mysqli_close($conexiune);
}
?>