<?php
$nilai= "b";
switch($nilai) {
    case 'a' : $komentar = "pertahankan"; break;
    case 'b' : $komentar = "harus lebih baik lagi"; break;
    case 'c' : $komentar = "perbamyak belajar"; break;
    case 'd' : $komentar = "jangan keserriggan bolos"; break;
    case 'e' : $komentar = "jangan main terus"; break;
    default : $komentar = "format tidak sesuai";
}
echo"grade <b> $nilai </b> $komentar";


?>