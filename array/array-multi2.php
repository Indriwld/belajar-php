<?php

$artikel =[
[
"judul "=> "belajar php & Mysql untuk pemula",
"penulis"=> "petanikode"
],
[
"judul"=> "tutorial php dari nol hingga mahir ",
"penulis" => "petanikode"
],
[
    "judul" => "membuat aplikasi web dengan PHP",
    "penulis " => "petanikode"
]
];

foreach($artikel as $post){
    echo "<h2>".$post ["judul"]. "</h2>";
    echo "<p>".$post ["penulis"]. "<p>";
    echo "<hr>";
}