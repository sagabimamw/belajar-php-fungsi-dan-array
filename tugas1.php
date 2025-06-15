<?php

function cek_angka($bilangan) {
    if ($bilangan % 2  == 0) {
        echo "$bilangan adalah bilangan genap.";
    } else {
        echo "$bilangan adalah bilangan ganjil.";
    }
}

// Contoh penggunaan:
cek_angka(4); 