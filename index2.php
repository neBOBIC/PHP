<?php

echo "<h2>Sarcina 1</h2>";

echo '<form method = "post">';
echo '<label for="a">Introdu a <label>';
echo '<input type="text" id="a" name="a"><br>';
echo '<label for="b">Introdu b <label>';
echo '<input type="text" id="b" name="b"><br>';
echo '<label for="c">Introdu c <label>';
echo '<input type="text" id="c" name="c"><br>';
echo '<input type="submit"><br>';
echo '</form>';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

$x1 = 0;
$x2 = 0;

$delta = ($b ** 2) - 4 * $a * $c;

if ($delta > 0) { 
    $x1 = (-$b - sqrt($delta)) / (2 * $a);
    $x2 = (-$b + sqrt($delta)) / (2 * $a);

    echo "x1 = ", $x1, "<br>";
    echo "x2 = ", $x2, "<br>";
}
else if($delta == 0) {
  $x1 = (-1 * $b) / (2 * $a);
  $x2 = $x1;
  echo "x1 = ", $x1, "<br>";
  echo "x2 = ", $x2, "<br>";
}
else {
    echo "ecuatia nu are solutii";
}
}

echo "<h2>Sarcina 2</h2>";

$var1 = 67;
$var2 = 68;

if($var1 - $var2 == 1 or $var2 - $var1 == 1){
    echo "numerele ", $var1, " si ", $var2, " sunt consecutive <br>";
}
else {
    echo "numerele ", $var1, " si ", $var2, " nu sunt consecutive <br>";
}

echo "<h2>Sarcina 3</h2>";

$d = 6;
$e = 5;
$f = 8;
$mij = 0;

echo "Variabilele neinterschimbate: ", $d, " ", $e, " ", $f, "<br>";

$mij = $d;
$d = $e;
$e = $f;
$f = $mij;

echo "Valorile Interschimbate: ", $d, " ", $e, " ", $f, "<br>";
?>