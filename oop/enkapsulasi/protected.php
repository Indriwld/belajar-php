<?php
class laptop
{
    public $pemilik;
    protected function hidupkanlaptop()
    {
        return "hidupkan laptop";
    }
    public function paksahidupkanlaptop()
    {
        return $this->hidupkanlaptop();
    }
}
$laptopanto = new laptop();
$laptopanto->pemilik = "anto<br>";
echo $laptopanto->pemilik;
//echo $laptopanto->hidupkanlaptop();
echo $laptopanto->paksahidupkanlaptop();
