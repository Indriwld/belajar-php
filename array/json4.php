<?php
 
 $dataMhs = '[
     {"nama" :"mahmud","domisili": "bandung"},
     {"nama" :"udin","domisili": "Tasik"},
     {"nama" :"encep","domisili": "Majalaya"},
     {"nama" :"entis","domisili": "Ciamis"}
]';

$data = json_encode ($dataMhs);
foreach ($data as $mhs){
    echo "nama : " . $mhs->nama . "<br>";
    echo "domisili : " . $mhs ->domisili;
    echo "<hr>";
}
?>