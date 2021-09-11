<?php
//membuat fungsi
function hitungumur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam = "assalamualaikum")
{
    echo $salam . ",";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    // memenaggil fungsi lain
    echo "saya berusaha " . hitungumur(2003, 2021).
    "tahun</br/>";
    echo "Senang berkenalan dengan anda<br/>";
}
//memanggil fungsi perkenalan
echo perkenalan("Indri Wulandari")
?>
        