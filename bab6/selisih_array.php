<?php
//mendefinisikan array
$basa = array("sodium", "klorin");
$asam = array("hidrogen", "klorin", "nitrogen");

// mencari elemen-elemen yang ada di salah satu dari
// kedua array, tetapi tidak ada di dalam kedua array

$selisih = array_unique(array_merge(array_diff($asam, $basa), array_diff($basa, $asam)));
print_r($selisih);