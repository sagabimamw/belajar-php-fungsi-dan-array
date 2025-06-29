<?php 
class Siswa {
    public $nama;
    public $umur;


    public function tampilkanNama($nama, $umur) : void {
        echo "Nama sya adalah" . $nama . ", umur saya" . $umur . "<br>";
    }
} 

$siswa = new Siswa();

$siswa->nama = "Bagas";
$siswa->umur = 19;
$siswa->tampilkanNama($siswa->nama, $siswa->umur);
