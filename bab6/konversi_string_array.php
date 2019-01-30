<?php
// mendefinisikan string
$stringAlfabet = "a b c d e f g h i j k";

// memecah string ke dalam array
// menggunakan spasi putih sebagai pemisah
print_r(explode(" ", $stringAlfabet));
echo "<br>";

$arrayNama = array("jono", "joni", "harto", "santi", "monika");
//  menggabungkan elemen-elemen array ke string
// menggunakan "dan" sebagai separator

echo implode(" dan ", $arrayNama);