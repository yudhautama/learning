<?php
// mendefinisikan kode ASCII
$asc = 1000;

//membaca karakter
$kar = chr($asc);
echo $kar;
echo '<br>';

// menampilkan seluruh alfabet
for ($a=97; $a <(97+26) ; $a++) { 
    echo chr($a);
}

?>