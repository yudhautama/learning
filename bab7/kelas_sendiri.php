<?php
// mendefinisikan kelas untuk komputer generik
class Generik
{
    // properti
    public $cpu;
    public $mem;

    //metode untuk menetapkan spesifikasi memori
    public function setMemori($nil){
        $this->mem = $nil;
        echo "menetapkan memori menjadi $nil MB...\n";
    }

    // metode untuk menetapkan spesifikasi prosesor
    public function setCpu($nil){
        $this->cpu = $nil;
        echo "Menetapkan prosesor menjadi \"$nil\"...\n";
    }

    // metode untuk menampilkan konfigurasi
    public function getKonfigurasi(){
        echo "Konfigurasi saat ini: $this->cpu CPU, $this->mem MB RAM\n";
    }
}

// menciptakan sebuah objek kelas
$pcKu = new Generik;

// menetapkan prosesor dan memori
$pcKu->setCpu("Pentium I3");
$pcKu->setMemori(8192);

// menampilkan konfigurasi
$pcKu->getKonfigurasi();
