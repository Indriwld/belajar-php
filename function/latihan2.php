<html>
    <form action=" " method="post">
<fieldset>
    <legend><h2>Lingkaran</h2></legend>
        jari jari<input type="text" name="jari-jari" required><br><br>
        <button type="submit" name="submit">submit</button><br><br>
</html>
<?php

if (isset($_POST['submit'])) {
    $a = $_POST ['jari'];

    function luasLingkaran($jari, $phi=3.14)
    {
        $luas =$phi *$jari * $jari;
        return $luas;
    }
    function kelilinglingkaran($jari, $phi=3.14)
    {
        $keliling = 2 * ($phi * $jari);
        return $keliling;
    }
?>
jari jari= <?php echo $a;?> <br>
luas lingkaran =<?php echo luaslingkaran($a); ?> <br>
keliling lingkaran = <?php echo kelilinglingkaran ($a); ?>
<?php } ?>
</fieldset>
</form>
</html>