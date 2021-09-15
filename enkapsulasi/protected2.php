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
        return $this->tampilkanJenisProcessor();
    }
}

$laptop = new Laptop();
echo $laptop->getProcessor();
