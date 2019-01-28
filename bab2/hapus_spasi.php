<?php
//mendefinisikan string
$str = "  ini     adalah     string     dengan  ban  yak    spa   si    putih    ";

// memotong spasi-putih di akhir string
// memapatkan spasi-putih di tengah string
$strbaru = str_replace('[[:space:]]+', ' ', trim($str));
echo $strbaru;
?>