<?php

$tipe_tiket = "A";
$harga = 100000;

function cek_transaksi($tipe, $harga) {
    if($tipe == "A" && $harga == 100000) {
        echo "membeli tiket";
    } else {
        echo "tidak jadi";
    }
 }
  cek_transaksi(
    $tipe_tiket,
    $harga
  );



  



