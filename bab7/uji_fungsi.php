<?php
// fungsi contoh
function fungsiAda(){
    return false;
}

// menguji apakah fungsi ada
echo function_exists("fungsiAda") ? "Fungsi Ada" : "Fungsi Tidak ada";

// menguji apakah fungsi tidak ada
echo function_exists("fungsiTidakAda") ? "Fungsi Ada" : "Fungsi Tidak ada";