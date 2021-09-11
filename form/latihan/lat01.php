<html>
    <head><title>band favorit ~inputan checkbox </title></head>
    <body> 
        <FORM ACTION = "" METHOD ="POST" NAME="input ">
          masukan bilangan 1: <input type =" text " name = "bil1"><br><br>
          masukan bilangan 2: <input type =" text " name = "bil2"><br><br>
            <input type ="submit" name ="input" value= "input">
</FORM>
</body>
</html>
<?php
 if (isset($_POST['input'])){
    $bil1 =$_POST['bil1'];
    $bil2 =$_POST['bil2'];
    $jumlah =$bil1 + $bil2;
    echo "bilangan 1 + bilangan 2 = $jumlah ";
    echo "<br>";
    $jumlah =$bil1 - $bil2;
    echo "bilangan 1 - bilangan 2 = $jumlah ";
    echo "<br>";
    $jumlah =$bil1 * $bil2;
    echo "bilangan 1 * bilangan 2 = $jumlah ";
    echo "<br>";
    $jumlah =$bil1 / $bil2;
    echo "bilangan 1 / bilangan 2 = $jumlah ";
    echo "<br>";

 }
?>