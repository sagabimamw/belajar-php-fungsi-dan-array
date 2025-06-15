<?php
$pasien = [
    [
        "nama" => "bagas",
        "umur" => 12,
        "no_urut" => 1,
        "no_bpjs" => "101010"
    ],
    [
        "nama" => "zia",
        "umur" => 19,
        "no_urut" => 2,
        "no_bpjs" => "111111"
    ],
    [
        "nama" => "plenger",
        "umur" => 18,
        "no_urut" => 3,
        "no_bpjs" => "100110"
    ],
];

function pasien(array $data_pasien): void {
    foreach ($data_pasien as $data) {
        echo "No Urut: {$data['no_urut']}<br>";
        echo "Nama: {$data['nama']}<br>";
        echo "Umur: {$data['umur']}<br>";
        echo "No BPJS: {$data['no_bpjs']}<br><br>";
    }
}

pasien($pasien);
?>
