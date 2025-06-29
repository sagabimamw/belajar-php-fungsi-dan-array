<?php

class Mobil {
    public $merk;
    public $tipe;
    public $warna;
    public $merkBan;


    public function belokKanan() : void {
        echo "belok kanan"; 
    } 
    public function belokKiri()  : void {
        echo "belok kiri";
    }
      public function jalanMaju() : void {
        echo "maju"; 
    } 
    public function jalanMundur()  : void {
        echo "mundur";
    }
      public function idupkanMensin() : void {
        echo "mesin hidup"; 
    } 
    public function matiinMesin()  : void {
        echo "mesin mati";
    }
    public function detailMobil($merk, $tipe, $warna, $merkBan) : void {
        echo "Mobil saya adalah $merk, Tipenya adalah $tipe, Warnanya adalah $warna, dan merkbannya $merkBan";
    }  
}
$mobil_bmw = new Mobil();

$mobil_bmw->merk = "bmw";
$mobil_bmw->tipe = "sedan";
$mobil_bmw->warna = "hitam";
$mobil_bmw->merkBan = "bbs";
$mobil_bmw->detailMobil(
    $mobil_bmw->merk, 
    $mobil_bmw->tipe, 
    $mobil_bmw->warna,
     $mobil_bmw->merkBan);