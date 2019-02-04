<?php
// mendefinisikan fungsi
// untuk menghitung luas lingkaran
function hitungLuasLingkaran($radius){
    return pi() * $radius * $radius;
}

// memanggil fungsi  untuk lingkaran dengan radius 10
echo "Luas Lingkaran dengan radius 10 adalah " .
hitungLuasLingkaran(10);