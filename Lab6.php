<?php
// function salutare($nume)
// {
//     echo "Bun venit, " . $nume . "!";
// }

// salutare("Adrian");

// echo "<br>";

// function afisareMesaj($nume, $mesaj = "Bun Venit"){
//     echo $mesaj . ", " . $nume;
// }

// afisareMesaj("Andrei");
// echo "<br>";

// afisareMesaj("Andrei", "La Multi Ani");
// echo "<br>";

// function media($num1, $num2, $num3){
//     return ($num1 + $num2 + $num3) / 3;
// }

// $rez = media(4, 6, 7);
// echo $rez;

// function adaugaBonus(&$a){
//     $a++;
// }

// $val = 9;

// adaugaBonus($val);
// echo $val;

// function dublu($x){
//     return $x * 2;
// }

// function tripluPLusDublu($x){
//     return 3 * $x + dublu($x);
// }

// $rez = tripluPLusDublu(4);
// echo $rez;

// function suma($n){
//     if ($n <= 0){
//         return 0;
//     }
//     return $n + suma($n - 1);
// }

// $rez = suma(4);
// echo $rez;

function citesteNote() {
    return [8, 7, 5, 4, 6];
}

function calculeazaMedia($note) {
    $suma = 0;
    foreach ($note as $n) {
        $suma += $n;
    }
    return $suma / count($note);
}

function afiseazaRezultat($media) {
    if ($media >= 5) {
        echo "Promovat";
    } else {
        echo "Respins";
    }
}

$note = citesteNote();
$media = calculeazaMedia($note);
echo "Media este: " . $media . "\n";
afiseazaRezultat($media);

?>