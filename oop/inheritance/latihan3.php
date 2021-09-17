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
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td><input type="text" name="nama" required></td>
                <tr>
                    <td>harga</td>
                    <td>:</td>
                    <td><input type="text" name="harga"required></td>
                </tr>

                <tr>
                    <td>jumlah pesanan</td>
                    <td>:</td>
                    <td><input type="number" name="jumlah" required></td>
                </tr>

                <tr>
                    <td>jenis pembayaran</td></td>
                    <td>:</td>
                    <td><input type="text" name="jenis" required></td>
                </tr>

                 <tr>
                    <td>diskon</td>
                    <td>:</td>
                    <td><input type="text" name="diskon" required></td>
                </tr>
                 <tr>
                    <td>Cash back</td></td>
                    <td>:</td>
                    <td><input type="text" name="cashback" required></td>
                </tr>
                 <tr>
                    <td>jumlah</td></td>
                    <td>:</td>
                    <td><input type="text" name="jumlah" required></td>
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
    <?php
    if (isset($_POST['submit'])) {
    $namaBarang = $_POST['nama'];
    $harga = $_POST['harga'];
    $pesanan = $_POST['pesanan'];
    $pembayaran = $_POST['pembayaran'];
   
    
    ?>
  </body>
</html>
