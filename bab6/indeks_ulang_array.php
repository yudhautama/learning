<?php
// mendefinisikan array berindeks
$superhero = array(0 => "spiderman", 1 => "superman", 2 => "superboy", 3 => "green lantern");

// menghapus sebuah elemen dari tengah array
unset ($superhero[2]);

// menata ulang elemen-elemen array untuk menghapus gap
$superhero = array_values($superhero);
print_r($superhero);