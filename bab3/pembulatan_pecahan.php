<?php
// mendefinisikan angka pecahan
$angka = (2/3);

// membulatkan ke integer
$angkaBulat = round($angka);
echo $angkaBulat . "\n";

// membulatkan ke 1 digit di belakang titik desimal
$angkaBulat = round($angka, 1);
echo $angkaBulat . "\n";

// membulatkan ke 3 digit di belakang titik desimal
$angkaBulat = round($angka, 3);
echo $angkaBulat . "\n";
?>