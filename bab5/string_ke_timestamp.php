<?php
// mendefinisikan string
$str = "20140607" ;

// mengkonversi string ke timestamp

$ts = strtotime($str);

// memformat jadi tanggal/waktu yang mudah dibaca
echo ($ts === -1) ? "string tak valid" : date("l, d F Y h:i:s A, $ts");