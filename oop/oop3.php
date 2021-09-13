<?php

//mendefinsikan seuah class
class kucing
{
    //membuat property atau atributes
    public $warna;

    //construct adlah method khusus yangakan
    //dipanggil pertama kali
    public function __construct($warna)
    {
        $this -> warna = $warna;
    }
    //membuat method (behaviour / perilaku)
    public function bersuara()
{
    return "meowww....meoww..meoww...";
}
public function berburu()
{
    return "berburu ikan";
}
}
//memebuat object (inisiasi object)
$kucing1 = new kucing("hitam");
echo "warna kucing 1: " . $kucing1 ->warna . "<br>";

$kucing2 = new kucing("oren");
echo "warna kucing 2: " . $kucing2 ->warna . "<br>";
