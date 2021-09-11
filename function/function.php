<?php

function sapaPengunjung ($nama, $jumlahKunjungan) {
  echo "<h1>Halo {$nama}, selamat datang!</h1>";
  echo "<p>Terima kasih telah berkunjung ke situs kami.</p>";

  if ($jumlahKunjungan > 10) {
    echo "<p>Kami memiliki hadiah ebook gratis untuk anda karena anda telah mengunjungi situs kami sebanyak {$jumlahKunjungan} kali.</p>";
  }
}