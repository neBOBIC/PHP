<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "Lab5_elevi";
$conexiune = mysqli_connect($hostname, $username, $password) 
    or die("Nu sa putut conecta");
mysqli_select_db($conexiune, $database) 
    or die("Nu sa gasit Baza de Date");
?>