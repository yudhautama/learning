<?php
// function to recursively search
// directories for matching filenames
function cariRekursif($dir, $pola){
    // memeriksa apakah argumen adalah directori yang valid
    if (!is_dir($dir)){
        die("Argumen '$dir' bukan direktori!");
    }

    // mendeklarasikan array untuk memuat semua kecocokan
    global $daftarCocok;

    // membuka direktori
    $dh = opendir($dir) or die("Tidak dapat membuka direktori '$dir'!");

    // beriterasi pada tiap file dalam direktori
    while (($file = readdir($dh)) !==false) {
        // mengabaikan "." dan ".."
        if ($file != "." && $file != "..") {
            if (is_dir("$dir/$file")) {
                // ini adalah subdirektori
                // proses secara rekursif
                cariRekursif("$dir/$file", $pola);
            } else {
                // ini adalah file
                // periksa kecocokan
                // tambahkan ke $daftarCocok jika ditemukan
                if (preg_match("/$pola/", $file)) {
                    $daftarCocok[] = "$dir/$file";
                }
            }            
        }
    }

    // menghasilkan daftar akhir
    return $daftarCocok;
}

// mencari nama-nama file yang memuat "ini
$daftarFile = cariRekursif("c:/xampp", "ini");
print_r($daftarFile);