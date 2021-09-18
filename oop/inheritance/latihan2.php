<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body><fieldset>
    <legend>Tugas Mahasiswa</legend>
    <table>
        <form action=" " method="POST" name="input">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <td> Nilai </td>
            <td> : </td>
            <td><input type="number" name="jenis" value="jenis"></td>
            </tr>
            <tr>
                <td>Nama Dosen</td>
                <td>:</td>
                <td><input type="text" name="dosen"></td>
            </tr>
             <tr>
                <td>Mata Kuliah</td>
                <td>:</td>
                <td><input type="text" name="matkul"></td>
            </tr>
             </tr>
        <tr></td>
        <tr>
                <td>
                     <td><input type="submit" name="submit" value="Submit">
                </td>

                <td>
                    <input type="reset" name="reset" value="Reset"></td>
                </td>
                </tr>

        </form></fieldset>
    </table>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $jenis = $_POST['jenis'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $dosen = $_POST['dosen'];
    $matkul = $_POST['matkul'];

    class kuliah
    {

        public function __construct($jenis)
        {

            $this->jenis = $jenis;
        }

    }
    class tugas extends kuliah
    {
        public function tug()
        {
            parent::__construct($this->jenis);
            if ($this->jenis >= 85) {
                $a = "lulus  ";
            } elseif ($this->jenis >= 75) {
                $a = "lulus";
            } elseif ($this->jenis >= 65) {
                $a = "perbaiki";
            } else {
                $a = "tidak lulus";
            }
            return $a;

        }
        public function tu()
        {
            parent::__construct($this->jenis);
            if ($this->jenis >= 85) {
                $a = "A ";
            } elseif ($this->jenis >= 75) {
                $a = "B ";
            } elseif ($this->jenis >= 65) {
                $a = " C";
            } else {
                $a = " E ";
            }
            return $a;

        }
    }

    $kuliah = new tugas($jenis, $nama, $nim, $dosen, $matkul);
    echo "nama : " . $nama . "<br>";
    echo "nim : " . $nim . "<br>";
    echo "dosen : " . $dosen . "<br>";
    echo "matkul : " . $matkul . "<br>";
    echo "status : " . $kuliah->tu() . "<br>";
    echo "nilai : " . $kuliah->tug() . "<br>";
}
?>