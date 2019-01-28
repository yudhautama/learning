<?php
// mendefinisi URL
$url = "http://www.algoritma.com:80/komunitas/kolom/baris/artikel.php?id=79&&hal=2";

//mendekomposisi URL menjadi array
$data = parse_url($url);

//menampilkan komponen-komponen URL
foreach ($data as $k => $v) {
    echo "$k: $v \n";
}

?>