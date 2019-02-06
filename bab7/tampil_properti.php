<?php
// mendefinisikan kelas class
class Anjing{
    public $varietas;
    public $nama;
    public $umur;

    // medefinisikan beberapa metode
    public function __construct() {
        echo "Menciptakan Seekor Anjing.\n";
    }
}

// menciptakan objek
$objekAnjing = new Anjing();
$objekAnjing->nama = "Putih";
$objekAnjing->varietas = "Bloodhound";
$objekAnjing->umur = 7;

// beriterasi pada properti-properti objek
// menampilkan tiap properti dan nilai terkininya
foreach ($objekAnjing as $kunci => $nilai) {
    echo "$kunci: $nilai\n";
}