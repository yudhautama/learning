<?php
// mendefinisikan array berindeks
$superhero = array("spiderman", "superman");

// menambahkan elemen ke akhir array
array_push($superhero, "superboy");
print_r($superhero);

// menghapus elemen dari awal ke array
array_shift($superhero);
print_r($superhero);

// menambah elemen dari awal ke array
array_unshift($superhero, "hulk");
print_r($superhero);

// menghapus elemen dari akhir array
array_pop($superhero);
print_r($superhero);