<?php
// mendefinisikan variabel diluar fungsi
$nama ="Jono";

// mengakses variabel dari dalam fungsi
function siapaAku(){
    global $nama;

    // memeriksa variabel
    echo "Saya $nama diawal fungsi.\n";

    // mendefinisikan ulang variabel didalam fungsi
    $nama = "Joni";

    // memeriksa variabel 
    echo "Saya $nama diakhir fungsi.\n";
}

// memeriksa variabel
echo "Saya $nama sebelum fungsi di jalankan.\n";

//memanggil fungsi
echo siapaAku();

// memeriksa variabel
echo "Saya $nama setelah fungsi dijalankan.\n";