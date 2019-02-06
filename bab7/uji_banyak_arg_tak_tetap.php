<?php
// mendefinisikan fungsi yang menerima banyak argumen dinamis
function hitungJumlah(){
    $jum = 0;

    // membaca daftar argumen sebagai array
    $argumen = func_get_args();

    // memproses daftar argumen dan menambahkan tiap argumen ke total sebelumnya
    // jika ada argumen yang merupakan sebuah array maka gunakan loop untuk memprosesnya
    for ($x=0; $x < sizeof($argumen) ; $x++) { 
        if (is_array($argumen[$x])) {
            foreach($argumen[$x] as $a)
            $jum += $a;
        } else {
            $jum += $argumen[$x];
        }   
    }
    return $jum;
}

// memanggil fungsi dengan 2 argumen skalar
echo "Penjumlahan dari 1 dan 10 adalah " . hitungJumlah(1, 10) . ".\n";

// memanggil fungsi dengan campuran dari 3 argumen skalar dan 1 array
echo "Penjumlahan dari 1, 2, 5 dan 1 adalah " . hitungJumlah(1, 2, array(5,1)) . ".\n";
