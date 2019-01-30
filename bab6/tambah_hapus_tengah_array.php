<?php
// mendefinisikan array
$arrayWarna = array("Violet", "Indigo", "biru", "hijau", "kuning", "oranye", "merah", "ungu", "hitam", "putih");

// menghapus 4 elemen tengah
array_splice($arrayWarna, 3, 4);
print_r($arrayWarna);

// menambah 2 elemen di antara "hitam" dan "putih"
array_splice($arrayWarna, 5, 0, array("perak", "coklat"));
print_r($arrayWarna);