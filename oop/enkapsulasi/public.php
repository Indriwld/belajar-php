<?php
class laptop
{
    public $pemilik;
    public function hidupkanlaptop()
    {
        return "hidupkan laptop";
    }
}
$laptopanto = new laptop();
$laptopanto->pemilik = "anto";
echo $laptopanto->pemilik;
echo $laptopanto->hidupkanlaptop();
