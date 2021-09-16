<?php
class komputer
{
    protected $jenisProcessor = "Intel core 17";

    protected function tampilkanJenisProcessor()
    {
        return $this->jenisProcessor;
    }
}
class Laptop extends Komputer
{
    public function getProcessor()
    {
        return $this->JenisProcessor();
    }
}

$kumputer = new komputer();
$laptop = new laptop();

$laptop = new Laptop();
echo $laptop->getProcessor();
