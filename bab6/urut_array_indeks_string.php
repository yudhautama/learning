<?php
// mendefinisikan array asosiatif
$binatang = array(
    "singa" => "aku", 
    "rusa" => "dia", 
    "tiger"=>"mereka",
    "gajah"=>"saya", 
    "singa"=>"kamu"
);

// mengurutkan berdasarkan nilai
asort($binatang);
print_r($binatang);
echo "<br>";

// mengurutkan berdasarkan kunci
ksort($binatang);
print_r($binatang);