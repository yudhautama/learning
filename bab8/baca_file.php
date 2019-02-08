<?php
// menetapkan nama file
$file = "coba.txt";

// membaca isi file dan menempatkannya kedalam sebuah array
$dataArray = file($file);
print_r ($dataArray);

// membaca isi file dan menempatkannya kedalam sebuah string
$dataString = file_get_contents($file);
print_r ($dataArray);