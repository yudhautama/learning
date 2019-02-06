<?php
// mendefinisikan kelas basis
class Anjing {
    // mendefinisikan beberapa properti
    public $nama;
    public $umur;

    // medefinisikan beberapa metode
    public function __construct(){
        echo "Menciptakan Seekor Anjing.\n";
    }

    public function goyangEkor(){
        echo "Hmmm...Anjing ini bahagia sekali!.\n";
    }
}

// menggunakan refleksi untuk menginspeksi kelas
Reflection::export(new ReflectionClass('Anjing'));
?>