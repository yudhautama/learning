<?php
// mendefinisikan sebuah fungsi
// yang menghasilkan nilai balik dengan referensi
function &inkremenAngka(){
    global $angka;
    $angka++;
    return $angka;
}

// mendefinisikan sebuah variabel di luar fungsi
$angka = "0";

// memanggil fungsi
// menghasilkan nilai balik fungsi sebagai referensi
$nilaiBalik =& inkremenAngka();
echo "Angka adalah $nilaiBalik. \n";

// memanggil fungsi kembali
inkremenAngka();

// memeriksa referensi
echo "Angka adalah $nilaiBalik. \n";