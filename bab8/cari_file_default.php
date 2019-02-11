<?php
// fungsi untuk mencari sebuah file
// dalam include path PHP
function cariIncludePath($file ){
    // mendapatkan daftar dari semua direktori
    // dalam include file
    $daftarPencarian = explode(":", ini_get('include_path'));

    // beriterasi pada daftar
    // menghasilkan path jika ditemukan
    foreach ($daftarPencarian as $dir) {
        if (file_exists("$dir/$file")) {
            return realpath("$dir/$file");
        }
    }
    return false;
}

// mencari file "DB.php"
$hasil = cariIncludePath('DB.php');
echo $hasil ? "File ditemukan pada $hasil" : "File tidak ditemukan";