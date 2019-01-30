<?php
// fungsi untuk membandingkan panjang dari dua nilai
function urutPanjang($a, $b){
    if (is_scalar($a) && is_scalar($b)) {
        if (strlen($a) == strlen($b)) {
            return 0;
        } else {
            return (strlen($a) > strlen($b)) ? 1 : -1;
        }
        
    }
}

// fungsi untuk mengurutkan secara rekursif pada array bersarang
function urutRekursif(&$arr, $fungsiUrut, $paramFungsiUrut = NULL){
    // memeriksa apakah masukan berupa array
    if (!is_array($arr)) {
        die("Argumen bukan array!");
    }

    // mengurutkan array menggunakan nama fungsi
    $fungsiUrut($arr, $paramFungsiUrut);

    // memeriksa apakah array ada
    // jika ada, lakukan pengurutan secara rekursif
    foreach (array_keys($arr) as $k) {
    if (is_array($arr[$k])) {
        urutRekursif($arr[$k], $fungsiUrut, $paramFungsiUrut);
        }
    }

}

// mendefinisikan array bersarang
$data = array (
    'Indonesia' => array(
        'Bandung', 
        'Yogyakarta'=> array('bantul', 'Sleman'), 
        'Wates', 'Wonosari', 'Kulonprogo', 
        'kota Yogyakarta'=> array('Malioboro', 'Keraton', 'Mall malioboro', 'Museum'
    )));

    // mengurutkan $data secara rekursif meggunakan asort()
    urutRekursif($data, 'asort');

    // mengurutkan $data secara rekursif menggunakan fungsi sendiri
    urutRekursif($data, 'usort', 'urutPanjang');
    print_r($data);