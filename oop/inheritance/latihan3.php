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
            <legend>data pembelian</legend>
            <table>
                <tr>
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td><input type="text" name="namabarang"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><input type="number" name="harga"></td>
                </tr>
                <tr>
                    <td>Jumlah Pesanan</td>
                    <td>:</td>
                    <td><input type="number" name="jumlahpesanan"></td>
                </tr>

                    <tr>
            <td>Sistem Pembayaran </td>
            <td> : </td>
            <td><select type="text" name="sistem" >
            <option value= "Cash" > Cash</option>
            <option value= "M-Banking" > M-Banking</option>
            <option value= "Gopay" > Gopay</option>
            <option value= "PikUp" > PikUp</option>
            </select></td>
            </tr>
            <tr>
                 <td></td><td></td>
                 <td><input type="submit" name="input" value="Input"></td>
                </tr>



    </form>
      </table>
        </fieldset>
</body>
</html>
    <?php
if (isset($_POST['input'])) {
    $namabarang = $_POST['namabarang'];
    $jumlahpesanan = $_POST['jumlahpesanan'];
    $harga = $_POST['harga'];
    $sistem = $_POST['sistem'];
    $harganormal = $harga * $jumlahpesanan;
    class pembayaran
    {
        public function __construct($namabarang, $jumlahpesanan, $harga,
            $sistem, $harganormal) {
            $this->namabarang = "$namabarang";
            $this->jumlahpesanan = $jumlahpesanan;
            $this->harga = $harga;
            $this->sistem = $sistem;
            $this->harganormal = $harganormal;
        }
        public function discount()
        {
            if ($this->harganormal >= 150000) {
                $hargadiscount = $this->harganormal * 0.1;
            } elseif ($this->harga >= 250000) {
                $hargadiscount = $this->harganormal * 0.15;
            } else {
                $hargadiscount = 0;
            }
            return $hargadiscount;
        }

    }
// turunkan class Malaikat ke chromebook
    class uang extends pembayaran
    {
        public function diskon()
        {
            if ("Cash" == $this->sistem) {
                $a = $this->discount();

            } elseif ("M-Banking" == $this->sistem) {
                $a = ($this->harganormal * 0.025) + $this->discount();

            } elseif ("Gopay" == $this->sistem) {
                $a = ($this->harganormal * 0.1) + $this->discount();

            } elseif ("PikUp" == $this->sistem) {
                $a = ($this->harganormal * 0.015) + $this->discount();

            }

            return $a;
        }
        public function cashback()
        {
            if ("Cash" == $this->sistem) {
                $a = "Tidak mendapatkan CashBack";

            } elseif ("M-Banking" == $this->sistem) {
                $a = "getDiskon";

            } elseif ("Gopay" == $this->sistem) {
                $a = "CashBack";

            } elseif ("PikUp" == $this->sistem) {
                $a = "getDiskon";

            }

            return $a;
        }
        public function status()
        {
            $b = $this->harganormal - $this->diskon();
            $a = $b - $this->discount();
            return $a;
        }
    }
    $output = new uang($namabarang, $jumlahpesanan, $harga,
        $sistem, $harganormal);

    echo "Nama Barang  :  " . $output->namabarang . "<br>";
    echo "Harga Barang  :  " . $output->harga . "<br>";
    echo "Jumlah Pesanan  :  " . $output->jumlahpesanan . "<br>";
    echo "Metode Pembayaran  :  " . $output->sistem . "<br>";
    echo "Harga Normal  :  " . $output->harganormal . "<br>";
    echo "Discount :  " . $output->discount() . "<br>";
    echo " " . $output->cashback() . " : " . $output->diskon() . "<br>";
    echo "Harga Total :  " . $output->status() . "<br>";

}

?>