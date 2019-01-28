<?php
// mendefinisikan string
$html = "Saya <b>capek </b>jadi saya <b>harus </b>pulang ke <a href= 'http://domain'> rumah</a> sekarang";

// memeriksa kecocokan
echo preg_match("/(.*)+/", $html) ? "Cocok" : "Tidak Cocok";

?>