<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Array Multidimensi</title>
    </head>
<body>
<p>Beberapa propinsi di Tiga Negara:</p>
<?php # array_multidimensi.php

//menciptakan sebuah array
$indonesia = array(
    'JATENG'=> 'Jawa Tengah',
    'SUMUT'=>'Sumatra Utara',
    'JABAR' =>'Jawa Barat',
);
    
// Menciptakan array lain
$us = array(
    'MD'=> 'Maryland',
    'IL'=> 'Illinois',
    'PA'=> 'Pennsylvania',
    'IA'=> 'Iowa',
);

// Menciptakan array ketiga
$kanada = array(
    'QC'=> 'Quebec',
    'AB'=> 'Alberta',
    'NT'=> 'Northwest Territories',
    'YT'=> 'Yukon',
);

// Menggabungkan array
$n_amerika = array(
    'Indonesia'=> $indonesia,
    'United States'=> $us,
    'Kanada'=> $kanada,
);

// Menjelajah negara-negara
foreach ($n_amerika as $negara => $list) {
    // mencetak kepala
    echo "<h2>$negara</h2><ul>";

    // menampilkan tiap propinsi
    foreach ($list as $k => $v) {
        echo "<li>$k - $v</li>\n";
    }

    // Menutup daftar
    echo '</ul>';
}   // Akhir dari FOREACH

?>
</body>
</html>