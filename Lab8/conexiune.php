<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "biblioteca";

$conexiune = mysqli_connect($hostname, $username, $password) or die ("Nu sa facut conexiunea la bd");

mysqli_select_db($conexiune, $database) or die("Nu sa putut conecta");

?>