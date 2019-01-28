<?php
// mendefinisi string
$html = "Saya <b>capek</b> jadi saya <b>harus</b> pulang ke <a href='http://domain'>rumah</a> sekarang";

// mengganti semua teks tebal menjadi teks miring.
$strBaru = preg_replace("/<b>(.*?)<\b>/i", "<i>\\1</i>", $html);
echo $strBaru;
?>