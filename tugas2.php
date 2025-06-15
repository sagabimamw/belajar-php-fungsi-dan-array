<?php

$menu = "Pizza";
$harga = 50000;

function cek_pesanan($menu, $harga) {
    if($menu == "Pizza" && $harga == 50000) {
        echo "Pesanan berhasil: $menu dengan harga Rp $harga";
    } else {
        echo "Pesanan gagal, silakan pilih menu lain";
    }
}

cek_pesanan( 
    $menu, $harga
    );
