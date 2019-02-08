<?php
// fungsi untuk memroses secara rekursif
// sebuah direktori dan semua subdirektori
function jelajahDir($dir){
// memeriksa apakah argumen adalah direktori yang valid
if (!is_dir($dir)) {
    die("Argumen '$dir' bukan sebuah direktori");
}

// mendeklarasikan variabel untuk menampung daftar file
global $daftarFile;

// membuka direktori
$dh = opendir($dir) or die("Tidak dapat membuka direktori '$dir'!");

// beriterasi pada file-file di dalam direktori
while (($file = readdir($dr)) !== false) {
    // memfilter "." dan ".."
    if ($file != "." && $file != "..") {
        if (is_dir("$dir/$file")) {
            // ini adalah sebuah subdirektori
            // proses secara rekursif
            jelajahDir("$dir/$file");
        } else {
            // ini adalah file
            // lakukan sesuatu, misalkan membalik nama/path dan tambahkan ke array
            $daftarFile[] = strrev("$dir/$file");
        }
    }
}
// menghasilkan daftar file akhir
return $daftarFile;
}

// memproses secara rekursif sebuah direktori
$hasil = jelajahDir('.\learning\bab8');
print_r($hasil);