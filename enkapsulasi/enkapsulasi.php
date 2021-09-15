<?php

class orangTua
{
    protected $noAtm = "1111-2222-3333-4444";
    private $pinAtm = "001222";

    public function noAtm()
    {
        return $this->noAtm;
    }
    public function pinAtm()
    {
        return $this->pinAtm;
    }
}

class Anak extends orangtua
{
    public function noAtm()
    {
        return $this->noAtm;
    }
    public function pinAtm()
    {
        return $this->pinAtm;
    }
}

$orangtua = new orangtua();
$Anak = new Anak();

//ingin mengetahui data atm dari object orangtua
echo "No Kartu ATM : " . $orangtua->noAtm() . "<br>";
echo "pin ATM : " . $orangtua->pinAtm() . "<hr>";

//anak ingin mengetahui data atm dari class orang tua
echo "No Kartu ATM : " . $Anak->noAtm() . "<br>";
echo "Pin ATM : " . $Anak->pinAtm();
