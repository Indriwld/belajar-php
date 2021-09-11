<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>BIODATA</legend>
        <table>
            <tr>
                <td>Nama : </td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin :</td>
                <td><input type="radio" name="jk" value="laki-laki"> Laki-laki
                <input type="radio" name="jk" value="perempuan"> Perempuan</td>
            </tr>
            <tr>
                <td>Tanggal lahir : </td>
                <td><input type="date" name="date"></td>
            </tr>
            <tr>
                <td>Agama :</td>
                <td>
                    <select name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Keristen">Keristen</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat : </td>
                <td>
                    <textarea name="alamat" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td>Hobi : </td>
                <td>
                    <input type="checkbox" name="hobi" value="Ngojay">ngojay<br>
                    <input type="checkbox" name="hobi" value=   "Tiktokan">Tiktokan-<br>
                    <input type="checkbox" name="hobi" value= "Ngadu langlayangan">Ngadu langlayangan<br>
                    <input type="checkbox" name="hobi" value= "megabdi setan">mengabdi setan<br>
                    <input type="checkbox" name="hobi" value="Halusisangu">Halusisangu<br>
                    <input type="checkbox" name="hobi" value="Mengghosting">Mengghosting<br>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="submit">
                </td>
            </tr>
        </table>
    </fieldset>
    </form>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
    function biodata($nama, $jk, $tl, $agama, $alamat, $hobi) {
        echo "Nama : $nama <br>";
        echo "Jenis Kelamin : $jk <br>";
        echo "Tanggal lahir : $tl <br>";
        echo "Agama : $agama <br>";
        echo "Alamat : $alamat <br>";
        echo "Hobi : $hobi";
    }
    echo biodata($_POST['nama'], $_POST['jk'], $_POST['date'], $_POST['agama'], $_POST['alamat'], $_POST['hobi']);

}

?>
         