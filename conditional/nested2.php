<?Php 
 $member = "tidak";
 $totalbelanja =50000;
 $disc =0;
 $totalharga =0;
  if ($member == "iya "){
      if ($totalbelanja >= 250000){
          $disc =0.1 * $totalbelanja;

      }else if  ($totalbelanja >= 100000 ){
          $disc = 0.05 * $totalbelanja;
}else {
    if ($totalbelanja >= 100000) {
        $disc = 0.025 * $totalbelanja;
    }
}
$totalharga =$totalbelanja -$disc ;
echo"kartu member : $member <br>";
echo " total belanja :$totalbelanja <br>";
echo " diskon : $disc<br>";
echo " total yang harus dibayar : $totalharga<br>";
  ?>