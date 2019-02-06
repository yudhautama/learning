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
echo is_callable(array("Anjing", "gonggong")) ? "Metode Ada" : "Metode tidak Ada";
echo "<br>";
echo is_callable(array("Anjing", "gukguk")) ? "Metode Ada" : "Metode tidak Ada";