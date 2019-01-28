<?php
// mendefinisi string
$html = "Saya <b>capek</b> jadi saya <b>harus</b> pulang ke <a href='http://domain'>rumah</a> sekarang";

// menghitung jumlah kemunculan dari teks tebal di dalam string.
preg_match_all("/<b>(.*?)<\b>/i", $html, $cocok);
echo sizeof($cocok[0]) . " kemunculan";
?>