<?php

function cek_nilai($nilai) {
    if ($nilai >= 80) {
        echo "A";
    } elseif ($nilai >= 70) {
        echo "B";
    } else {
        echo "C";
    }
}