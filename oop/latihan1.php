<?php
class komputer
{
//membuat properti atau attributes
    public $pemilik = "indring";
    public $merek = "aipon";
    public $ukuranLayar = 4.5;

//membuat method (behaviour / )
    public function nyala()
    {
        return "komputer bisa dinyalakan";
    }
    public function mati()
    {
        return "komputer bisa dimatikan";
    }
}
// membuat project (inisiasi project)
$komputer1 = new komputer();
echo "Nama pemilik : " . $komputer1->pemilik . "<br>";
echo "merek : " . $komputer1->merek . "<br>";
echo "ukuran Layar : " . $komputer1->ukuranLayar . "<br>";
echo "Komputer : " . $komputer1->nyala() . "<hr>";

$komputer2 = new komputer();
$komputer2->pemilik = "ayu";
echo "Nama pemilik : " . $komputer2->pemilik . "<br>";
echo "merek : " . $komputer2->merek . "<br>";
echo "ukuran Layar : " . $komputer2->ukuranLayar . "<br>";
echo "Komputer : " . $komputer2->mati() . "<hr>";

$komputer3 = new komputer();
$komputer3->pemilik = "asep";
$komputer3->merek = "philips";
echo "Nama pemilik : " . $komputer3->pemilik . "<br>";
echo "merek : " . $komputer3->merek . "<br>";
echo "ukuran Layar : " . $komputer3->ukuranLayar . "<br>";
echo "Komputer : " . $komputer3->mati() . "<hr>";

$komputer3 = new komputer();
$komputer3->pemilik = "ujang";
$komputer3->merek = "samsung";
$komputer3->ukuranLayar = 5.4;
echo "Nama pemilik : " . $komputer3->pemilik . "<br>";
echo "merek : " . $komputer3->merek . "<br>";
echo "ukuran Layar : " . $komputer3->ukuranLayar . "<br>";
echo "Komputer : " . $komputer3->nyala() . "<hr>";

$komputer3 = new komputer();
$komputer3->pemilik = "romlah";
$komputer3->merek = "vivo";
$komputer3->ukuranLayar = 2.4;
echo "Nama pemilik : " . $komputer3->pemilik . "<br>";
echo "merek : " . $komputer3->merek . "<br>";
echo "ukuran Layar : " . $komputer3->ukuranLayar . "<br>";
echo "Komputer : " . $komputer3->nyala() . "<hr>";
