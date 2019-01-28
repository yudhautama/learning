<?php
//mendefinisikan string
$syair  = "aku mau mencintai kekuranganmu";

// mengubah karakter pertama menjadi huruf besar dari string
$ucfstr = ucfirst($syair);
echo $ucfstr;
echo "<br/>";

// mengubah karakter pertama menjadi huruf besar dari setiap kata
$ucwstr = ucwords($syair);
echo $ucwstr;

?>