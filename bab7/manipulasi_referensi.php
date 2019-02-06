<?php
// mendefinisikan sebuah fungsi
// yang mengubah variabel menggunakan referensi
function ubahHari(&$hari){
    $hari = "Kamis";
    return $hari;
}

// mendefinisikan sebuah variabel di luar fungsi
$hari = "Minggu";

// memeriksa variabel
echo "sebelum menjalankan ubahHari(), hari adalah $hari. \n";

// melewatkan variabel dengan referensi
ubahHari($hari);

// memeriksa variabel
echo "setelah menjalankan ubahHari(), hari adalah $hari.";