<?php
if(isset($_POST['pilih'])) {
    $jurusan = $_POST ['jurusan'];
    echo "jurusan anda adalah
    <b><font color ='red' >$jurusan</font></b>";
}
?>