<?php
//mendefinisikan string
$str = "klaten bersinar";

//menghapus 6 karakter pertama
$strbaru = substr($str, 3);
echo $strbaru;
echo "<br/>";

//menghapus 6 karakter terakhir
$strbaru = substr($str, 0, -6);
echo $strbaru;

?>