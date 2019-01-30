<?php
// mendefinisikan array asosiatif
$data = array(
    "IND"=> "Indonesia Raya",
    "US"=> "United States of Amerika",
    "UK"=> "United Kingdom",
    "AU"=> "Australia",
);

// melakukan pencarian kunci
echo array_key_exists("UK", $data) ? "Kunci ada" : "Kunci tidak ada";
echo "<br>";

// melakukan pencarian nilai
echo in_array("Australia", $data) ? "Nilai ada" : "Nilai tidak ada";