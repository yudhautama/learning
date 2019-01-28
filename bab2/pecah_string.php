<?php
// mendefinisikan string
$str = "Jogja kota budaya dan simbol keberagaman, meskipun akhir - akhir ini ada kelompok tertentu yang mengusik kebhinekaannya";

// mendefinisikan ukuran segmen/chunk
$ukuranChunk = 21;

// memecah string menjadi chunk - chunk
$arraychunk = str_split($str, $ukuranChunk);
print_r ($arraychunk);

?>