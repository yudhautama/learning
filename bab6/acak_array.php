<?php
//mendefinisikan array yang memuat angka dari 1 sampai 5
$arrayAngka = range(1,5);

// mengacak elemen-elemen array secara acak
shuffle($arrayAngka);
echo join (", ", $arrayAngka);
echo "<br>";
?>

<?php
//mendefinisikan array yang memuat angka dari 1 sampai 12
$arrayAngka = range(1,12);

// mengambil 5 kunci acak dari array
$kunciAcak = array_rand($arrayAngka, 5);

// menampilkan elemen-elemen yang terpilih
echo join(", ", $kunciAcak);