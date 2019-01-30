<?php
// mendefinisikan array
$arrayWarna = array("Violet", "Indigo", "biru", "hijau", "kuning", "oranye", "merah", "ungu", "hitam", "putih");

// mengekstrak 4 elemen tengah
$potong = array_slice($arrayWarna, 3, 4);
print_r($potong);