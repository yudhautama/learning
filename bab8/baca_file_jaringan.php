<?php
// membuka file
$fp = fopen("coba.txt", "rb") or die("tidak dapat membuka file");

// membaca isi file ke dalam sebuah string
while (!feof($fp)) {
    $dataStr = fgets($fp, 1024);
}

// menutup file
fclose($fp) or die("tidak dapat menutup file");

// menampilkan isi
echo $dataStr;