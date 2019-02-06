<?php
// kelas contoh
class Anjing
{
    // metode
    public function getInfo(){
        echo "Saya $this->nama, berumur $this->umur tahun.\n";
    }
}

// menciptakan sebuah objek kelas
$spaniel = new Anjing;

// menetapkan properti
$spaniel->nama ="Bleky";
$spaniel->umur = 6;

// menyalin objek
$salin = clone $spaniel;

// membaca properti
$salin->getInfo();