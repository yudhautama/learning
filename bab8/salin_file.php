<?php
// menetapkan nama file
$file = "coba.txt";
$tujuan = "coba.txt.cadangan";

// menyalin file jika file ada, sebaliknya keluar
if (file_exists($sumber)) {
    copy($sumber, $tujuan) or die("Tidak dapat menyalin file '$sumber'");
    echo "File berhasil disalin";
} else {
    die("Tidak dapat menemukan file '$sumber' ");
}
