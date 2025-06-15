<?php
//2dimensi
$kumpulan_data2 = [
    [ //0
        "data_1", "data_2", "data_3" //0
    ], 
    [ //1
        "data _2" //0
    ],
    [ //2
        "data_3" //0
    ]
];

foreach($kumpulan_data2 as $index => $data) {
    foreach($data as $index => $data_lagi) {
        echo $data_lagi;
    }
} 
echo $kumpulan_data2[0][1];
