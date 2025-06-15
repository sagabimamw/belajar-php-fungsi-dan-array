<?php
 
function menyapa_waktu($jam) {
    if ($jam >= 5 && $jam <= 11) {
        echo "selamat pagi";
    } else if($jam >= 12 && $jam <=15) {
        echo "selamat siang";
    } else if($jam >=16 && $jam <=18) {
        echo "selamat sore";
    } else if($jam >= 19 && $jam <= 4) {
        echo "selamat malam";
    } else {
        echo "salah";
    }

}
 menyapa_waktu(jam: 100);