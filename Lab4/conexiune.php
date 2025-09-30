<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "colegiu";
$conexiune = mysqli_connect($hostname, $username, $password) or die("Nu sa efectuat conexiunea");   

mysqli_select_db($conexiune, $database) or die ("Nu gasesc baza de date");
?>