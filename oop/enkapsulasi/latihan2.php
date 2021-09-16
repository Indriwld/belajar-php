<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dokumen</title>
</head>
<body>
    <fieldset>
        <legend>MENGCINGKED</legend>
        <form action="" method="post">
            <table>
          <tr>
                <td>Warna Kucing</td>
                <td> : </td>
                <td><input type="text" name="warna"><br></td>
            </tr>
            <tr>
                <td>Jumlah Kaki</td>
                <td> : </td>
                <td><input type="number" name="kaki" id=""></td>
            </tr>
            <tr>
                <td></td><td></td>
                <td><input type="submit" name="submit" value="Submit">
                    <input type="reset" name="reset" value="Reset"></td>
            </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $warna = $_POST['warna'];
    $kaki = $_POST['kaki'];

    class kucing
    {
        public $warna;
        public $kaki;

        public function ucing($warna, $kaki)
        {
            if ($kaki == 4) {
                echo "Berwarna : " . $warna . "<br>";
                echo "Memiliki Kaki : " . $kaki . "<br>";
                echo "Keterangan Kucing: Normal";
            } else if ($kaki <= 3) {
                echo "Berwarna : " . $warna . "<br>";
                echo "Memiliki Kaki : " . $kaki . "<br>";
                echo "Keterangan Kucing: Cingked";
            } else if ($kaki >= 5) {
                echo "Berwarna : " . $warna . "<br>";
                echo "Memiliki Kaki : " . $kaki . "<br>";
                echo "Keterangan Kucing: siluman kucing";
            }
        }
    }
    $kucing = new kucing();
    echo $kucing->ucing($warna, $kaki);
}
?>