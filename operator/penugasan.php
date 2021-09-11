<?php
  $uang =200000;
  $minum = 15000;
  $sosis =25000;
   
   echo "uang ucup =<b>$uang</b>";
   echo "<hr>";

   $uang -= $minum;
   echo"jajan minuman <b>$minum</b>";
   echo "<br>sisa uang ucup jajan minuman =<b>$uang</b> ";
   echo"<hr>";

   $uang -= $sosis;
   echo"jajan minuman <b>$sosis</b>";
   echo "<br>sisa uang ucup jajan minuman + sosis bakar =<b>$uang</b> ";
   echo"<hr>";

   $sedekah = $uang * 0.1;
   echo" sedekah musafir 10% <b>$uang</b> yaitu sebesar <b>$sedekah</b>";
   $uang -= $sedekah;
   echo "<br>sisa uang ucup =<b>$uang</b> ";
   echo"<hr>";

   $nemuuang = $uang * 0.5;
   echo"nemu uang dijalan 50%dari sisa uang ucup <b>$uang </b>yaitu sebesar <b>$nemuuang</b>";
   echo "<br>sisa uang ucup sekarang  =<b>$nemuuang + $uang </b> ";
   echo"<hr>";

   $uang += $nemuuang;
   echo "total uang ucup adalah <b> Rp. $uang</b>";
?>