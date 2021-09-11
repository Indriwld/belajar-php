<?php 
//no 1
$i = 2;
echo "1.";
 do {
    
     echo " $i ";
     $i *= 2;

 }while ($i <= 128);
 echo "<hr>";
  
 //no 2
$i = 3125;
echo "2.";
 do {
    
     echo " $i ";
     $i /= 5;

 }while ($i >=5 );
 echo "<hr>";
 //nomor 3
 echo "3.";
 $books = [
     18,45,29,61,47,34,
 ];
 foreach ($books as $buku ) {
     $sisabagi =$buku % 3;
     echo "$buku %3 = $sisabagi<br>" ;
     echo "<hr>";
 }
 // nomor 4
 $i =5;
 for ($a= $i; $a>0; $a--){
     for ($b= $i; $b>= $a; $b--){
     echo"*";
     }
     echo"<br>";
    
 }
 //nomor 5
 for ($a=0; $a < 5; $a++) {
     for ($b = 5; $a > $i; $a-=1){
         print("&nbsp");
     } 
     for ($c =0 ; $c<=$a; $c++){
         echo"*";

     }
     echo "<br/>";
 }
 echo "<hr>";
?>