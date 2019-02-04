<?php
// mendefinisikan variabel diluar negeri
$nama ="Susan";

// mengakses variabel dari dalam fungsi
function siapaAku(){
    global $nama;
    return $nama;
}

//memanggil fungsi
echo siapaAku();