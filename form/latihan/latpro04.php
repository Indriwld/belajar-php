<?php
if (isset($_POST['input'])) {
    $nama = $_POST ['nama'];
    $agama = $_POST ['agama'];
    $jam = $_POST ['jam'];
    $lembur=$jam -173;
    $gajilembur=$lembur *20000;
    $jk = $_POST ['jk'];
    $golongan= $_POST ['golongan'];

    if($golongan ==1){
        $gaji=1500000;
        $tunjangan=150000;
    }else if ($golongan ==2){
        $gaji=2000000;
        $tunjangan =2000000;
    }else if ($golongan ==3){
        $gaji=2500000;
        $tunjangan =250000;
    }else if ($golongan ==4){
        $gaji=3000000;
        $tunjangan =300000;
}
$pajakpokok =0.5*$gaji;
$pajaklembur = 0.05 *$gajilembur;
$pajak = $pajakpokok + $pajaklembur ;
$gajikotor = $gaji +$tunjangan+ $lembur;
$hasil = $gajikotor -$pajak;

echo "<br>nama =$nama";
echo "<br>agama =$agama";
echo "<br>jenis kelamin=$jk";
echo "<br>gaji pokok =$gaji";
echo "<br>gaji lembur =$gajilembur";
echo "<br>tunjangan =$tunjangan";
echo "<br>gaji kotor =$pajakpokok";
echo "<br>total pajak =$pajak";
echo "<br>hasil =$hasil";
}
?>