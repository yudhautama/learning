<?php
// fungsi untuk menguji apakah sebuah angka positif
function apaPositif($nilai){
    return ($nilai > 0) ? "true" : "false";
}

// mendefinisikan array angka
$runtun = array(-10,21,43,-6,5,1,84,1,-32);

// memfilter nilai-nilai positif
print_r(array_filter($runtun, 'apaPositif'));