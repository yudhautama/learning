<?php
// mendefinisikan array asosiatif dan bersarang
$data = array("Indonesia Raya" => array( "Jakarta", "Yogyakarta", "Medan"=> array("Pematang Siantar", "Balige"=> array("Tarabunga"))));

// mendefinisikan string pencarian
$cari ="an";
$cocok = array();

// pencarian array secara rekursif
$iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($data));

foreach ($iterator as $nilai ) {
    if (preg_match("/$cari/i", $nilai)) {
        $cocok[] = $nilai;
    }
}

// menampilkan nilai - nilai yang cocok
print_r($cocok);