<?php
include("conexiune.php");

$action = $_GET["action"];

if ($action == "add") {
$nume=$_POST["nume"];
$prenume=$_POST["prenume"];
$adresa=$_POST["adresa"];
$email=$_POST["email"];
$data_nasterii=$_POST["data_nasterii"];
$sex=$_POST["sex"];
$media_bac=$_POST["media_bac"];
$query = "INSERT INTO `elevi` (Nume, Prenume, Adresa, Email, Data_Nasterii, SEX, Media_BAC) VALUES ('$nume', '$prenume', '$adresa', '$email', '$data_nasterii', '$sex', '$media_bac')";
if (!mysqli_query($conexiune, $query)) {
die(mysqli_error($conexiune));
} else {
echo "Datele au fost introduse";
echo "<script>
        setTimeout(function() {
        window.location.href = 'Lab5.php';
    }, 3000);
        </script>";
}

}

else if ($action == "edit") {
$id = $_POST["id"];
$nume=$_POST["nume"];
$prenume=$_POST["prenume"];
$adresa=$_POST["adresa"];
$email=$_POST["email"];
$data_nasterii=$_POST["data_nasterii"];
$sex=$_POST["sex"];
$media_bac=$_POST["media_bac"];

$query = "UPDATE elevi SET Nume='$nume', Prenume='$prenume', Adresa='$adresa', Email='$email', Data_Nasterii='$data_nasterii', SEX='$sex', Media_BAC='$media_bac' WHERE ID = '$id'";

if (!mysqli_query($conexiune, $query)) {
    die(mysqli_error($conexiune));
}
else {
    header("Location: Lab5.php");
}
}

else if ($action == "delete") {
    $id = $_GET["id"];
    $query = "DELETE FROM `elevi` WHERE ID = '$id'";

    if (!mysqli_query($conexiune, $query)) {
        die(mysqli_error($conexiune));
    } else {
        header("Location: Lab5.php");
        exit();
    }
}
?>