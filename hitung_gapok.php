<?php
  $lamaKerja = $_POST["lama_kerja"];
  $golongan = $_POST["golongan"];
  $gapok;

  if ($lamaKerja > 5 && $golongan == "A") {
    $gapok = 3000000;
  } else if ($lamaKerja > 5 || $golongan == "A") {
    $gapok = 2500000;
  } else if ($lamaKerja < 5 || $golongan == "B") {
    $gapok = 2000000;
  } else {
    $gapok = 1500000;
  }
  echo "Lama Bekerja Anda adalah ". $lamaKerja." tahun <br>";
  echo "Golongan Anda adalah ".$golongan."<br>";
  echo "Maka Gaji Pokok Anda adalah ".$gapok;
 ?>
