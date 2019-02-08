<?php
// mendefinisikan path direktori
$dir = 'C:\xampp\htdocs\learning\bab8';

// membaca isi direktori sebagai array
$daftarFile = scandir($dir) or die("Bukan direktori");

// menampilkan tiap nama file dan ukurannya
foreach ($daftarFile as $file ) {
    if (is_file("$dir/$file") && $file != '.' && $file != '..') {
        echo "$file: " . filesize("$dir/$file") . "\n";
    }
}