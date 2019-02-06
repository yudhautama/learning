<?php
// mendefinisikan kelas
class kelasUji
{
    // konstruktor
    function __construct(){
        echo "Menjalankan konstruktor...\n";
    }

    function __destruct(){
        echo "Menjalankan destruktor..\n";
    }
}

// menciptakan sebuah objek
$uji = new kelasUji();
unset($uji);
