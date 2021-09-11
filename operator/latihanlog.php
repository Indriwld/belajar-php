<?php
//soal 1
 $a = 1;
 $b = 9;
 $c = 10;
 $d = 11;
          echo " soal no 1 <br> " ;
          echo " <br> $a < $c : " . ($a > $c) ;
          echo " <br> ($b > $c) dan ($b > $c ) : "
              .(($a > $b ) && ($a > $b )) ;

          echo "<br> ($c > $d) atau ($b < $c ) : "
              .(($c > $d ) && ($b > $c)) ;
          echo "<hr>";

//soal 2
   $tono = 10 ;
   $tini = 8 ;
   $toni = 15 ;
        echo " soal no 2 <br> " ;
        echo " <br> $tono > $tini : ".($tono > $tini) ;
        echo " <br> ($toni > $tono ) || ($tini != $tono ) :"
                   .(($toni > $tono ) || ($tini != $tono ));
        echo " <hr>";
// soal ke 3
  $user ="user123";
  $pass = "pass123";
  
   echo "soal no 3 <br> ";
   echo"masukan username : $user";
   echo "<br> masukan pasword : $pass ";
   echo "<br>login ="
   .(($user == $user ) && ($pass == $pass));
   echo "<br>";


?>