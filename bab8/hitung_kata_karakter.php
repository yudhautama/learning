<?php
// menetapkan nama file dan path
$file = "coba.txt";

// membaca isi file ke dalam string
$str = file_get_contents($file) or die("Tidak dapat membaca dari file");

// membaca isi file ke dalam array
$arr = file ($file) or die("Tidak dapat membaca dari file");

// menghitung baris
echo "Terdapat " . sizeof($arr) . " baris dalam file.\n";

// menghitung karakter, dengan spasi
$jumKarSpasi = strlen($str);
echo "Terdapat $jumKarSpasi karakter dan spasi.\n";

// menghitung karakter, tanpa spasi
$strBaru = str_replace('[[:space]]+', '', $str);
$jumKar = strlen($strBaru);
echo "Terdapat $jumKar karakter tanpa spasi.\n";

// menghitung kata
$jumKata = str_word_count($str);
echo "Terdapat $jumKata kata di dalam file.\n";