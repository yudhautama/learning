<?php
function potongstring($str, $karMaks=40, $holder="..."){
    // memeriksa panjang string
    // memotongnya jika diperlukan
    if (strlen($str) > $karMaks) {
        return trim(substr($str, 0, $karMaks)) . $holder;
    } else {
        return $str;
    }
}

// mendefinisikan string yang panjang
$str = "Anda akan memotong suatu string yang panjang dan mengganti karakter-karakter yang dipotong dengan karakter tertentu.";

//memotong dan menampilkan string
echo potongstring($str);
echo '<br>';

//memotong dan menampilkan string
echo potongstring($str, 20, " >>>");

?>