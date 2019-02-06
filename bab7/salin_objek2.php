<?php
// kelas contoh
class Anjing
{
    // metode
    public function getInfo(){
        echo "Saya $this->nama, berumur $this->umur tahun.\n";

        // metode ini dijalankan pada saat operasi penyalinan
        // mengubah sebuah properti  dari objek hasil penyalinan
    }

    public function __clone(){
        $this->nama .= " (salin)";
    } 
}

// menciptakan sebuah objek kelas
$spaniel = new Anjing;

// menetapkan properti
$spaniel->nama ="Bleky";
$spaniel->umur = 6;

// membaca properti (asli)
$spaniel->getInfo();

// objek hasil penyalinan
$salin = clone $spaniel;

// membaca properti (salinan)
$salin->getInfo();