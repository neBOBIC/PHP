<?php
echo "<h3>Sarcina 1</h3>";

for($i = 0; $i <= 50; $i++){
    if($i % 2 == 0){
    echo $i, " ";
    }
}

echo "<h3>Sarcina 2</h3>";

$a = 5;

for($i = 1; $i <= 9; $i++){
    echo $a, " x ", $i, " = ", $a * $i, "<br>"; 
}

echo "<h3>Sarcina 3</h3>";

$i = 2;
$v1 = 0;
$v2 = 1;


echo $v1, " ", $v2, " ";

while($i < 10){
    $v3 = $v1 + $v2;
    echo $v3, " ";
    $v1 = $v2;
    $v2 = $v3;
    $i++; 
}

echo "<h3>Sarcina 4</h3>";

$num1 = 8;
$num2 = 3;

echo "Suma patratelor lui ", $num1, " si ", $num2," = ", pow($num1, 2) + pow($num2, 2);

echo "<h3>Sarcina 5</h3>";

$imp1 = 4;
$imp2 = 2;
$imp3 = 6;

echo ($imp1 + $imp2) / $imp3, "<br>";
echo ($imp1 + $imp3) / $imp2, "<br>";
echo ($imp2 + $imp3) / $imp1, "<br>";

echo "<h3>Sarcina 6</h3>";

$sar61 = 8;
$sar62 = 9;

echo $sar61 * 0.4, " + ", $sar62 * 0.78, " = ", ($sar61 * 0.4) + ($sar62 * 0.78);

echo "<h3>Sarcina 7</h3>";

$sar71 = 444;

echo intdiv($sar71,100) + intdiv($sar71 % 100, 10) + $sar71 % 10;

echo "<h3>Sarcina 8</h3>";

$sar81 = 678;

$x1 = intdiv($sar81,100);
$x2 = intdiv($sar81 % 100, 10);
$x3 = $sar81 % 10;

$x2 = 0;

echo $x1 * 100 + $x2 * 10 + $x3;

echo "<h3>Sarcina 9</h3>";

$perimetru = 8877;
echo intdiv($perimetru,1000) + intdiv($perimetru % 1000, 100) + intdiv($perimetru % 100 ,10) + ($perimetru % 10);

echo "<h3>Sarcina 9</h3>";

$age1 = 67;
$age2 = 69;

if( $age1 > $age2 ) {
    echo "Prima persoana este mai mare!";
}

elseif( $age1 < $age2 ) {
    echo "A doua persoana este mai mare!";
}

else {
    echo "Persoanele sunt de aceeasi varsta!";
}
?>