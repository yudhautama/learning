<?php
// menetapkan nama file
$file = "coba.txt";

// membaca file ke dalam array
$data = file($file) or die("Tidak dapat membaca file");

// menghapus baris ke tiga
unset ($data[2]);

// mengindeks ulang array
$data = array_values($data);

// menuliskan data kembali ke dalam file
file_put_contents($file, implode($data)) or die("Tidak dapat menulis ke file");
echo "File berhasil ditulis.";