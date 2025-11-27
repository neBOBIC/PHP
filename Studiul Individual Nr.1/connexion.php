<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "biblioteca_studiu1";

$conexiune = mysqli_connect($hostname, $username, $password, $database) or die ("Nu sa putut conecta la baza de date");

mysqli_select_db($conexiune, $database) or die ("Nu sa efectuat conexiunea");

?>