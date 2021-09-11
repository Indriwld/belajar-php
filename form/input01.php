<html>
    <head><title>pengolahan form </title></head>
    <body> 
        <FORM ACTION ="" METHOD ="POST" NAME="input ">
            nama anda : <input type ="text" name="nama"> <br>
            <input type ="submit" name ="input" value= "input">
</FORM>
</body>
</html>

<?php
 if (isset($_POST['input'])){
     $nama =$_POST['nama'];
     echo"Nama anda :<b> $nama</b>";
 }
?>
