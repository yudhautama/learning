<?php
// fungsi rekursif
// untuk menghitung faktorial
function hitungFaktorial($angka){
    // mendefinisikan variabel untuk menampung hasil
    static $hasil =1;

    // rekursif sampai $angka menjadi 1
    if ($angka > 1) {
        $hasil = $hasil * $angka;
        $angka--;
        hitungFaktorial($angka);
    }
    return $hasil;
}
echo "Faktorial dari 5 adalah " . hitungFaktorial(5);