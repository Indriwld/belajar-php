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
        <legend>oop inheritance</legend></legend>
        <form action="">
            <table>
               <tr>

           <th>jenis hamba</th>
           <td>

        <select name="" id="" name= "jenis mahkluk">
        <option value ="manusia">manusia</option>
        <option value ="jin">jin</option>
        <option value ="malaikat">malaikat</option>
        <option value ="setan">setan</option>
        </select>
           </td>
</tr>
            <tr>
                <th>
                     <td><input type="submit" name="submit" value="Submit">
                </th>
              <td>
                    <input type="reset" name="reset" value="Reset"></td>
              </td>
            </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $jenis = $_POST['jenis'];

    class jenismahluk
    {
        public $jenis;

        public function __construct($a)
        {
            $this->jenis = $a;
        }

    }
    class mahluk extends jenismahluk
    {
        public function tugasmahluk()
        {
            if ($this->jenis = "manusia") {
                $tugas = "beribadah kepada tuhan";
            } else if ($this->jenis = "malaikat") {
                $tugas = "beribadah kepada tuhan";
            } else if ($this->jenis = "jin") {
                $tugas = "mengoda manusia";
            } else {
                $tugas = "mengganggu manusia";
            }
            return $tugas;
        }
    }
    $mahluk = new mahluk($jenis);

    echo "jenis mahluk:" . $mahluk->jenis . "<br>";
    echo "sifat mahkluk tersebut :" . $mahluk->tugasmahluk();
}
?>


