<?php
// membaca file ke dalam
$data = file('coba.txt')  or die("tidak dapat membaca file");

// membaca baris pertama
echo $data[0] . "\n";

// membaca baris terakhir
echo end($data) . "\n";

// membaca beberapa baris ke 2-6
$bbrp_baris = array_slice($data, 1, 5);
echo implode("\n", $bbrp_baris);