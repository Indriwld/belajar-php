<html>
    keterangan ;
    <?php
    if (isset($_POST ['input'])){
        $uang =$_POST ['uang'];
        $pembayaran =$_POST['pembayaran'];

        function rupiah($angka){
            $hasil_rupiah ="RP" . number_format($angka, 2,',','.');
            return $hasil_rupiah; 
        }
        if ($uang == $pembayran){
          echo "uang anda pass ";
          echo "terimakasihsudah mempercayai rental kami";
        }
        else if ($uang>- $pembayran){
            $hasil = $uang -$= $pembayaran ;
            echo "uang kembalian anda ";
            echo rupiah ($hasil) ;
            echo "Terimakasih sudah mempercayai rental kami";
        }
        else {
            $hasil =$uang - $pembayran ;
            echo"Uang anda kurang dari blacklist nama anda";
        }
    } 
    ?>