<?php
// mendefinisikan kelas abstrak
abstract class tambahMesin{
    // mendefinisikan metode-metode abstrak
    abstract public function tambah();
    abstract public function kurang();
}

// mengimplementasikan kelas abstrak
// menghasilkan error fatal
// karena definisi tidak  mencantumkan
// definsi metode tambah() dan metode kurang()
class Kalkulator extends tambahMesin {
    // konstruktor
    public function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;
    }
}