<?php
//mendefinisikan array
$basa = array("sodium", "klorin");
$asam = array("hidrogen", "klorin", "nitrogen");

// mendapatkan semua elemen dari $asam
// yang juga ada di dalam $garam
$irisan = array_intersect($asam, $basa);
print_r($irisan);