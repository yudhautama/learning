<?php
// mendefinisikan daftar dengan tiap elemen dipisahkan koma
$string_bumbu = "cabe, bawang merah, garam, bawang putih, merica, ketumbar";

// mendekomposisi string ke dalam array
// menggunakan koma sebagai delimiter
$array_bumbu = explode(", ", $string_bumbu);

// beriterasi menjelajah array
// menampilkan elemen-elemen array individual
foreach ($array_bumbu as $i) {
    print_r ($i . "\r\n");
}

?>