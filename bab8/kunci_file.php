<?php
// membuka file
$fp = fopen('coba.txt', "wb+") or die("Tidak dapat membuka file");

// mengunci file
// menulis string ke dalam file
if (flock($fp, LOCK_EX)) {
    fwrite($fp, "ini percobaan kunci file.") or die("Tidak dapat menulis ke file");
} else {
    die("Tidak dapat mengunci file");
}

// menutup file
fclose($fp) or die ("Tidak dapat menutup file");
echo "File berhasil ditulis";