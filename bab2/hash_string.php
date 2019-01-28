<?php
// mendefinisikan string
$str = "dua meter ke kiri, empat meter ke kanan";

// mendapatkan hash MD5 dari string
$md5 = md5($str);
echo $md5;
echo "<br>";

// mendapatkan hash SHA1 dari string
$sha1 = sha1($str);
echo $sha1;

?>