<?php
// kelas contoh
class Anjing{
    public function gonggong(){
        echo "Guk guk guk";
    }
}

// menciptakan objek kelas
$spaniel = new Anjing;

// menguji apakah metode ada
// menggunakan objek kelas
echo method_exists($spaniel, "gonggong") ? "Metode Ada" : "Metode tidak Ada";
echo "<br>";
echo method_exists($spaniel, "gukguk") ? "Metode Ada" : "Metode tidak Ada";