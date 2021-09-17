<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP INHERITANCE</title>
</head>
<body>
    <form action=" " method="post">
        <fieldset>
            <legend>Data mahasiswa</legend>
            <table>
                    <td>Nama Mahasiswa</td>
                    <td>:</td>
                    <td><input type="text" name="nama" required></td>
                <tr>
                    <td>Nim</td>
                    <td>:</td>
                    <td><input type="text" name="Nim"required></td>
                </tr>

                <tr>
                    <td>Nilai</td>
                    <td>:</td>
                    <td><input type="number" name="Nilai" required></td>
                </tr>

                <tr>
                    <td>Mata kuliah</td>
                    <td>:</td>
                    <td><input type="text" name="matkul" required></td>
                </tr>

                 <tr>
                    <td>Nama dosen</td>
                    <td>:</td>
                    <td><input type="text" name="dosen" required></td>
                </tr>

                <tr>
                <td>
                     <td><input type="submit" name="submit" value="Submit">
                </td>

                <td>
                    <input type="reset" name="reset" value="Reset"></td>
                </td>
                </tr>

                  </fieldset>
                </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $Nim = $_POST['Nim'];
    $nilai = $_POST['nilai'];
    $matkul = $_POST['matkul'];
    $dosen = $_POST['dosen'];

    class mahasiswa
    {
        public $nama;
        public  $Nim;
        public $nilai;
        public $dosen;
        public $matkul;

        public function __construct($nama, $nim, $nilai)
        {
            $this->nama = $nama;
            $this->Nim = $Nim;
            $this->nilai = $nilai;
            $this->matkul = $matkul;
            $this->dosen = $dosen;

        }
    }
    class matakuliah extends mahasiswa
    {
            public function data()
        {
            if ($this->nilai >= 85) {
                $grade = "grade A,lulus";
            } else if ($this->nilai >= 75 ) {
                $grade = "Grade b,lulus";
            } else if ($this->nilai >= 65) {
                $grade = "grade c,perbaikan";
            } else if ($this ->nilai <= 65){
                $grade = "grade d,tidak lulus"
            }
            return $grade;
        }
    }
$mahasiswa = new matakuliah($nama,$nim,$nilai,$dosen,$matkul)
    echo "Nama : " .$mahasiswa ->nama ."<br>";
    echo "Nim : " . $mahasiswa->Nim . "<br>";
    echo "Nilai: " .$mahasiswa ->nilai ."<br>";
    echo "Nama Dosen: " .$mahasiswa ->dosen ."<br>";
    echo "Mata kuliah: " .$mahasiswa ->matkul ."<br>";
    echo "Status : " . $mahasiswa->data() . "<br>";

}

?>
