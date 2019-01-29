<?php
// membaca tanggal dan waktu sekarang
$skrg = getdate();

// menjadikan string
$waktuSkrg = $skrg["hours"] . ":" . $skrg["minutes"] . ":" . $skrg["seconds"];
$tanggalSkrg = $skrg["mday"] . "." . $skrg["mon"] . "." . $skrg["year"];

echo "Sekarang jam $waktuSkrg pada tanggal $tanggalSkrg";