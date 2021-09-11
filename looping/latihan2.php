<?php
 $plus =0 ;
 for ($i =2; $i <= 6; $i++) {
    for ($j =$i;  $j <= $i + 4; $j++){
         echo $j."&nbsp; ";
     }
     echo"<br>";
}

echo"<br>No 2 <br>";
$a=3;
for ($i =3; $i <= 21; $i += 2){
for($j = $i; $j <= $a; $j++){
        echo $j."&nbsp; ";
    }
       echo"<br";
       $a +=2;
       $a = $a +1;
}
?>