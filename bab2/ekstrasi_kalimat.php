<?php
// mendefinisikan string
$text = "Anda akan mengekstrasi kalimat pertama atau kalimat terakhir dari sebuah paragraf. Anda bisa menggunakan fungsi strtok( untuk memecah paragraf menjadi kalimat-kalimat, dan kemudian mengekstrasi kalimat yang diinginkan.";

// ekstrasi kalimat pertama
// kalimat terakhir dari sebuah paragraf
$kalimatPertama = strtok($text, ".?!");
echo $kalimatPertama;
echo "<br>";

// ekstrasi kalimat terakhir
$kalimatTerakhir = strrev(strtok(strrev(trim($text)), ".?!"));
echo $kalimatTerakhir;

?>