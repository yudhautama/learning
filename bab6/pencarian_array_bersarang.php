<?php
// fungsi untuk menjelajah array bersarang secara rekursif
// dan melakukan pencarian nilai yang cocok dengan sebuah pola
function pencarianArray($cari, $argkedua, $path=""){
    // memeriksa apakah masukan adalah sebuah array
    if (!is_array($argkedua)) {
        die("Argumen kedua bukan array!");
    }
    // mendekrlarasikan variabel untuk menampung kecocokan
    global $cocok;

    // beriterasi pada array
    foreach ($argkedua as $kunci => $nilai) {
        if (preg_match("/$cari/i", $kunci)) {
            $cocok[] = array($path . "$kunci/", "KUNCI: $kunci");
        }
        if (is_array($nilai)) {
            // jika suatu array bersarang
            // maka melakukan pencarian rekursif
            $path .= "$kunci/";
            pencarianArray($cari, $nilai, $path);
            unset($path);
        } else {
            // jika bukan sebuah array
            // memeriksa kecocokan
            // menyimpan path jika ada kecocokan
            if (preg_match("/$cari/i", $kunci)) {
                $cocok[] = array($path . "$kunci/", "NILAI : $nilai");
            }
        }
    }
    // menghasilkan daftar kecocokan
    return $cocok;
}

// mendefinisikan array bersarang
$data = array("Indonesia Raya" => array( "Jakarta", "Yogyakarta", "Medan"=> array("Pematang Siantar", "Balige"=> array("Tarabunga"))));

// melakukan pencarian string "an"
print_r(pencarianArray("an", $data));