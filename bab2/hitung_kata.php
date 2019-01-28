<?php
// mendefinisikan string
$teks = "Pada kasus ini, Anda akan menghitung jumlah kata dalam sebuah kalimat atau paragraf. Anda bisa menggunakan sebuah pola dalam mengidentifikasi kata-kata dalam suatu string, dan kemudian menghing berapa kali pola tersebut terjadi.";

// mendefinisikan string menjadi array kata
$kata = preg_split('/[^0-9A-Za-z\']+/', $teks, -1, PREG_SPLIT_NO_EMPTY);

//menghitung jumlah kata (elemen) dalam array
echo count($kata) . " kata";
echo '<br>';

//menggunakan fungsi str_word_count
$jumkata = str_word_count($teks);
echo $jumkata . " kata";
?>