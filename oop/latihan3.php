<html>
    <head><title>indring</title></head>
    <body>
    <fieldset>
<table>
<legend>IRITMITIKI UHUYYYYYYY</legend>
        <form action="" method="post">
    <tr>
        <td>bilangan 1</td>
        <td>:</td>
        <td><input type="number" name="bil1"></td></tr>
    <tr>
        <td>bilangan 2</td>
        <td>:</td>
        <td><input type="number" name="bil2"></td></tr>

<td><input type="submit" name="input"></td>

</table>
 </form>
 </fieldset>
</form>
   </body>
</html>

<?php
if (isset($_POST['input'])) {
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];

    class aritmatika
    {

        public function __construct($bil1, $bil2)
        {
            $this->bil1 = $bil1;
            $this->bil2 = $bil2;
        }
        public function penjumlahan()
        {
            return ($this->bil1 + $this->bil2);
        }
        public function pengurangan()
        {
            return ($this->bil1 - $this->bil2);
        }
        public function perkalian()
        {
            return ($this->bil1 * $this->bil2);
        }
        public function pembagian()
        {
            return ($this->bil1 / $this->bil2);
        }
        public function sisabagi()
        {
            return ($this->bil1 % $this->bil2);
        }
    }

    $hasil = new aritmatika($bil1, $bil2);
    echo "Penjumlahan dari $bil1 + $bil2 = <b>" . $hasil->penjumlahan() . "</b><br>";
    echo "Pengurangan dari $bil1 - $bil2 = <b>" . $hasil->pengurangan() . "</b><br>";
    echo "Perkalian dari $bil1 x $bil2 = <b>" . $hasil->perkalian() . "</b><br>";
    echo "Pembagian dari $bil1 / $bil2 = <b>" . $hasil->pembagian() . "</b><br>";
    echo "Sisa bagi dari $bil1 % $bil2 = <b>" . $hasil->sisabagi() . "</b><br>";
}

?>