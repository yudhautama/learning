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

// mendefinisikan array
$data = array('bhinneka', 'tunggal', 'ika', 'pancasila', 'indonesia' );

// mengurutkan array menggunakan fungsi pengurutan sendiri
usort($data, 'urutPanjang');
print_r($data);