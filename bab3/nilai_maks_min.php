<?php
// mendefinisikan deret angka
$deret = array(76, 7348, 56, 2.6, 189, 67.59, 17594, 2648, 1929.79,54,329, 820, -1.10, -1.101);

//mengurutkan array
sort($deret);

//mengekstrak nilai maks/min dari array terurut
$min = $deret[0];
echo "nilai minimum adalah $min";

$maks = $deret[sizeof($deret)-1];
echo "nilai maksimum adalah $maks";

?>