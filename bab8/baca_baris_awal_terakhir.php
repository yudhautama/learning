<?php
// membuka file
$fp = fopen ("coba.txt", "rb") or die("tidak dapat membuka file");

// membaca baris pertama
fseek($fp, 0, SEEK_SET);
echo fgets($fp);

// membaca baris terahir
fseek($fp, 0, SEEK_SET);
while(!feof($fp)) {
    $baris = fgets($fp);
}
echo $baris;

// menutup file
fclose($fp) or die("tidak dapat menutup file");