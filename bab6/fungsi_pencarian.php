<?php
// fungsi untuk melakukan pencarian kunci dan nilai pada array
function pencarianArray($cari, $argkedua){
    // memeriksa apakah ada sebuah array
    if (!is_array($argkedua)) {
        die("Argumen kedua bukan sebuah!");
    }
    // beriterasi pada
    foreach ($argkedua as $kunci => $nilai) {
        // memeriksa kunci dan nilai apakah cocok atau tidak
        // menghasilkan true jika ada kecocokan
        if (preg_match("/$cari/", $nilai) || preg_match("/$cari/", $kunci)) {
            return true;
            break;
        }
    }
}

// mendefinisikan array asosiatif
$data = array(
    "IND"=> "Indonesia Raya",
    "US"=> "United States of Amerika",
    "UK"=> "United Kingdom",
    "AU"=> "Australia",
);

// melakukan pencarian
echo pencarianArray("us", $data) ? "Ada kecocokan" : "No Match";
echo "<br>";
echo pencarianArray("xz", $data) ? "Ada kecocokan" : "No Match";