<?php
//mendefinisikan string
$str = " ";

// memeriksa apakah string kosong atau tidak
echo (!isset($str) || trim($str) == "" ) ? "Kosong" : "Tidak Kosong";

?>