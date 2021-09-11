<?php
  $day = date("D") ;
  switch ($day) {
      case 'sun' : $hari = " minggu " ;
       break ;
      case 'mon' : $hari = " senin " ;
       break ;
      case 'tue' : $hari = " selasa " ;
      break ;
      case 'wed' : $hari = " rabu " ; 
      break ;
      case 'thu' : $hari = " kamis " ;
       break ;
      case 'fri' : $hari = " jumat " ; 
      break ;
      case 'sat' : $hari = " sabtu " ; 
      break ;
      default  
        : $hari = " kiamat " ;
  }
 echo "hari ini hari <b> $day </b>" ;
?>