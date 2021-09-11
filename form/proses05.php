<?php
if(isset($_POST['Login'])) {
    $user = $_POST ['username'];
    $pass = $_POST ['password'];
if ($user == "indring" && $pass == "123"){
    echo "<h2>LOGIN BERHASIL</h2>";
}else {
        echo "<h2>LOGIN GAGAL</h2>";
    }
}
?>