<?php
// mendefinisikan sebuah array yang memuat elemen-elemen duplikat
$arrayAngka = array(10,20,10,40,35,80,35,50,55,10,55,30,40,70,50,10,35,85,40,90,30);

// menghapus semua elemen unik ke dalam array baru
echo join(", ", array_unique($arrayAngka));