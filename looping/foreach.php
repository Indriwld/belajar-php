<?php
 $books = [
     "panduan belajar PHP untuk pemula ",
     "membangun aplikasi web dengan php ",
     "tutorial PHP dan mysql",
     "membuat chat bot dengn php",

 ] ;
 echo "<h5> judul buku PHP : </h5>";
 echo "<ul>";
 foreach ($books as $buku ){
     echo "<li> $buku </li>";
 }
 echo" </ul>";
?>