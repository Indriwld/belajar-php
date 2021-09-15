<?php

class Admin
{
    public $nama = "indri";
    protected $user = "Admin";
    private $pass = "001122";

    public function login()
    {
        $a = $this->user;
        $b = $this->pass;
        if ($a == "indri" && $b == "001122") {
            $c = "Login Berhasil";
        }
        return $c;
    }

    public function info()
    {
        $a = $this->user;
        $b = $this->pass;
        $c = "User : " . $user . "Nama : " . $nama;
        return $c;
    }
}

$admin = new Admin();

echo "User : " . $admin->nama . "<br>";
echo "Password : " . $admin->nama . "<br>";
echo "Info : " . $admin->login() . "<hr>";
