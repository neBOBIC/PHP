<?php

include ('conexion.php');

if (isset($_POST['pizza']) && isset($_POST['name']) && isset($_POST['number']) && isset($_POST['option']) && $_POST != ""){
    $name = $_POST['name'];
    if(preg_match('/^\d{9}$/', $_POST['number']))
    {
        $number = $_POST['number'];
    }
    $pizza = implode(", ", $_POST['pizza']);
    $sauce = $_POST['option'];
    $adaos = implode(", ", $_POST['adaos']);
    $instructions = $_POST['textarea'];
}

$query = "INSERT INTO `date_pizza`(Nume, Numar, Pizza, Sos, Sos_add, Instructiuni) VALUES ('$name', '$number', '$pizza', '$sauce', '$adaos', '$instructions')";

if(!mysqli_query($conexiune, $query)){
    die(mysqli_error($conexiune));
}
else{
    echo "Datele au fost introduse";
    header("Location: Lab7.html");
}

mysqli_close($conexiune);

?>