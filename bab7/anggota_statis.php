<?php
//kelas contoh
class Contoh{
    // mendefinisikan properti statis
    static $kounterContoh = 0;

    // konstruktor
    // menginkremen ID setiap kali sebuah objek baru diciptakan
    public function __construct() {
        echo "menciptakan objek baru...\n";
        self::$kounterContoh++;
    }

    // metode untuk menghasilkan ID objek terkini
    public function getkounterContoh(){
        return self::$kounterContoh;
    }
}

// menciptakan dua objek
$a = new Contoh;
$b = new Contoh;

// membaca nilai kounter
echo "Ada " . $a->getkounterContoh() . " objek yang diciptakan\n";
echo "Ada " . $a->kounterContoh() . " objek yang diciptakan\n";