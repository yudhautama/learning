<?php
// fungsi untuk menjelajah array bersarang secara rekursif
function jelajahArray($arr){
    // memeriksa apakah masukkan adalah array
    if (!is_array($arr)) {
        die("Argumen bukanlah Array!");
    }

    // beriterasi pada array
    foreach ($arr as $nilai ) {
        // jika array adalah array bersarang maka jelajahi secara rekursif
        if (is_array($nilai)) {
            jelajahArray($nilai);
        } else {
            print_r (strtoupper($nilai) . "\n");
        }

    }
}

// mendefinisikan array bersarang
$data = array(
    "Indonesia Raya",
    array("Medan", "Yogyakarta"),
    array("Siantar",
    array("Mataram", "Bandung"))
);

jelajahArray($data);
?>