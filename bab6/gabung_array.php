<?php
// mendefinisikan array
$propinsiIndo = array("Aceh", "Sumut", "Riau", "Jambi");
$kabupatenIndo = array("Sleman", "Klaten", "Magelang");

// menggabungkan menjadi satu array
$indo = array_merge($propinsiIndo, $kabupatenIndo);
print_r($indo);

// mendefinisikan array
$ab = array("a"=> "apel", "b"=>"bunga");
$ac = array("a"=>"alamat", "c"=>"cinta");
$bcd = array("b"=>"bola", "c"=>array("can", "cantik"), "d"=>"desa");

// menggabungkan secara rekursif menjadi satu array
$abcd = array_merge_recursive($ab, $ac, $bcd);
print_r($abcd);