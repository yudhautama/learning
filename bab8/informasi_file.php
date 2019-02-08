<?php
// menetapkan nama file
$file = "coba.txt";

// membaca statistika file
$info = stat($file);
print_r ($info);

// membaca tipe file
$tipe = filetype($file);
echo "Tipe file adalah $tipe\n";

// membaca ukuran file
$ukuranFile = filesize($file);
echo "Ukuran file adalah $ukuranFile byte\n";

// apakah file dapat dibaca?
echo is_readable($file) ? "File dapat dibaca\n" : "File tidak dapat dibaca\n";

// apakah file dapat ditulis?
echo is_writable($file) ? "File dapat ditulis\n" : "File tidak dapat ditulis\n";

// apakah file dapat dieksekusi?
echo is_executable($file) ? "File dapat dieksekusi\n" : "file tidak dapat dieksekusi\n";