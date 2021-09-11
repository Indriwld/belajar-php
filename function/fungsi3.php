<?php
// function parameter
//nilai yang bisa dimasukan kedalam /sebuah nilai
//yang bisa di tentukan
function luassegitiga($a, $b )
{
    $alas = $a;
    $tinggi = $b;
    $luas = ($alas * $tinggi) /2;
    return $luas;
}
echo "luas segitiga : " . luassegitiga(10, 8);
?>
