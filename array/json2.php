<?php
$datajson ='{
    "nama":"ujang",
    "domosili":"bandung",
    "usia":23,
    "wni":true,
    "hobi":[
        "futsal","main game","main klereng"
    ]
    }';
    $data = json_decode($datajson);

    echo "nama :" . $data->nama ."<br>";
    echo "domisili :" . $data->domisili ."<br>";
    echo "usia :" . $data->usia ."<br>";
    echo "wni :" . $data->wni ."<br>";
    echo "hobi :" . $data->hobi ."<br>";
    ?>