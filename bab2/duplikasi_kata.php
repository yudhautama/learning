<?php
// mendefinisikan string
$str = " danau   toba  danau  terindah";

//memotong spasi-putih ditiap ujung string
$str = trim($str);

//memotong spasi putih ditengah string
$str = preg_replace('/[[:space:]]+/', '  ', $str);

//mendekomposisi string kedalam array "kata"
$kata = explode(' ', $str);

// beriterasi didalam array
// menghitung kemunculan tiap kata
// dan menyimpan hasilnya di array lain

foreach ($kata as $w)  {
    $statkata[strtolower($w)]++;
}

//menampilkan semua data yang muncul  lebih dari sekali
foreach ($statkata as $k => $v) {
    if ($v >=2) {
        print "$k \r\n";
    }
}

?>