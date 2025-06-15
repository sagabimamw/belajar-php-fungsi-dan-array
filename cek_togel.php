<?php

function cek_angka(
    $angka_benar, $angka_tebakan
): string {
    if ($angka_benar == $angka_tebakan) {
        return "selamat anda dapat 2 M";
    } else {
        return "anda rungkat";
    }
}
