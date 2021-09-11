<?php
if (isset($_POST['save'])){
    $nama = $_POST ['nama'];
    $asalsekolah = $_POST ['asalsekolah'];
    $indonesia = $_POST ['indonesia'];
    $matematika = $_POST ['matematika'];
    $inggris = $_POST ['inggris'];
    $ipa= $_POST ['ipa'];
    $total =0;
    $keterangan ="";
    
}
?>
<html>
    <body>
        <fieldset>
            <legend>data siswa </legend>
            <table border =1>
                <tr> 
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Asal sekolah</th>
                    <th>Nilai indonesia</th>
                    <th>Nilai matematika</th>
                    <th>Nilai inggris</th>
                    <th>Nilai IPA</th>
                    <th>jumlah nilai</th>
                    <th> ket</th>
                </tr>

                <?php
                $no =1;
                 for ($i=0; $i< count($nama); $i ++){ ?>
                 <tr>
                     <td ><?php echo $no++ ?> </td>
                     <td><?php echo $nama[$i]; ?> </td>
                     <td><?php echo $asalsekolah[$i];?> </td>
                     <td><?php echo $indonesia[$i];?> </td>
                     <td><?php echo $matematika[$i];?> </td>
                     <td><?php echo $inggris[$i];?> </td>
                     <td><?php echo $ipa[$i];?> </td>
                     <?php $total= $indonesia[$i] + $inggris[$i] + $matematika[$i] + $ipa[$i];
                    if ($total > 340 ){
                        $keterangan = "diterima";
                    }
                    else{
                        $keterangan =" tidak diterima";
                    }
                    ?>
                    </td>
                    <td><?php echo $total ; ?></td>
                    <td><?php echo $keterangan ; ?></td>
                 </tr>                     
                 <?php
                 }
                 ?>
                 </table>
        </fieldset>
    </body>
</html>