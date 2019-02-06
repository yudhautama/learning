<?php
// mendefinisikan kelas
final class Generik{
    public function __construct(){
        echo "Menginisialisasi konfigurasi sistem...\n";
    }
}

// mewarisi kelas
// menyebabkan error fatal
// karena kelas Generik tidak dapat diwarisi
class Server extends Generik {
    public function __construct(){
        parent::__construct();
    }
}