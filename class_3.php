<?php

class Mobil {
    public $merk;
    public $tipe;
    public $warna;
    public $merkBan;

    public function __construct() {
        $this->merk = "suzuki";
        $this->tipe = "katana";
        $this->warna = "biru tua";
        $this->merkBan = "bbs";   
    }
    public function tampilkanInfo() : void {
        echo "mobil ini adalah $this->merk,
        berwarna $this->warna,
        tipe $this->tipe , dan menggunakan ban merk $this->merkBan.";
    }
}

$mobil = new Mobil();

$mobil->tampilkanInfo();
   