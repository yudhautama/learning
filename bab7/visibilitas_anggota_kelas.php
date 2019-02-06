<?php
// kelas contoh
class kelasUji{
    public $varPublik;
    private $varPrivate;
    protected $varProtected;

    // metode
    public function metodePublik(){
        return;
    }
    public function metodePrivate(){
        return;
    }
    public function metodeProtected(){
        return;
    }
}

// menciptakan objek kelas
$objekKelas = new kelasUji;

// mencoba untuk menetapkan properti
$objekKelas->varPublik = 255;
$objekKelas->varPrivate = false;
$objekKelas->varProtected = "Alamat email";

// mencoba menjalankan metode
$objekKelas->metodePublik();
$objekKelas->metodePrivate();
$objekKelas->metodeProtected();