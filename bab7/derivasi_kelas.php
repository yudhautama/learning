<?php
// mendefinisikan kelas untuk komputer generik
class Generik
{
    // properti
    public $cpu;
    public $mem;

    //konstuktor
    function __construct(){
        echo "menginisialisasi konfigurasi sistem...\n";
    }

    // metode untuk menetapkan konfigurasi memori
    public function setMemori($nil){
        $this->mem = $nil;
        echo "Menetapkan memori menjadi \"$nil\"...\n";
    }

     // metode untuk menetapkan spesifikasi prosesor
     public function setCpu($nil){
        $this->cpu = $nil;
        echo "Menetapkan prosesor menjadi \"$nil\"...\n";
    }

    // metode untuk menampilkan konfigurasi terkini
    public function getKonfigurasi(){
        echo "Konfigurasi saat ini: $this->cpu CPU, $this->mem MB RAM\n";
    }

    //destuktor
    function __destruct(){
        echo "menginisialisasi konfigurasi sistem...\n";
    }
}

class Server extends Generik
{
    // mendefinisikan properti lain
    protected $disk;

    // mendefinisikan beberapa metode lain
    function __construct(){
        // menjalankan konstruktor induk
        parent::__construct();
    }

    // metode untuk menetapkan spesifikasi disk drive
    function setDisk($nil){
        $this->disk = $nil;
        echo "Menetapkan disk drive menjadi \"$nil\"...\n";
    }

    // metode untuk menambah memori
    function tambahMemori($nil){
        $this->mem += $nil;
        echo "Menambah memori menjadi \"$nil\"...\n";
    }

    // mendefinisikan ulang metode induk untuk menampilkan konfigurasi terkini
    public function getKonfigurasi(){
        echo "Konfigurasi sekarang: " . $this->cpu . "CPU, $this->mem MB RAM, " . $this->disk . " GB daya simpan disk\n";
    }
}

// menciptakan sebuah objek dari kelas terderivasi
$webServer = new Server;

// menggunakan metode-metode yang diwarisi dari kelas basis
$webServer->setCpu("Intel Pentium I3");
$webServer->setMemori(8192);
$webServer->setDisk(450);

// menggunakan metode yang didefinisikan pada kelas terderivasi
$webServer->tambahMemori(2048);

// menampilkan konfigurasi
$webServer->getKonfigurasi();
