<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "pizza";

$conexiune = mysqli_connect($hostname, $username, $password) or die ("Nu sa efectuat conexiunea la baza de date");

mysqli_select_db($conexiune, $database) or die("Nu sa putut conecta la baza de date");

?>