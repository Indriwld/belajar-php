<?php
class kucing
{
//membuat properti atau attributes
public $warna = "coklat";
public $jumlahKaki = 4;
public $jenisBulu = "panjang";
public $makananFavorit ="ikan pindang";

//membuat method (behaviour / )
public function bersuara()
{
    return "meowww....meoww..meoww...";
}
public function berburu()
{
    return "berburu ikan";
}
}
// membuat project (inisiasi project)
$kucing1 = new kucing();
echo "warna kucing : " . $kucing1->warna . "<br>";
echo "sifat kucing : " . $kucing1-> bersuara() . "<hr>";

$kucing2 = new kucing();
//set warna kucing
$kucing2->warna = "oren";
echo "warna kucing : " . $kucing2->warna . "<br>";
echo "sifat kucing : " . $kucing2-> berburu() . "<hr>";


?>