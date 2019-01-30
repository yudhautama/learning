<?php
// menciptakan sebuah array multidimensi
$data =array();
$data[0] = array("judul"=> "Net Force", "pengarang"=> "clancy, Tom", "rating"=> 4);
$data[1] = array("judul"=> "Every Dead Thing", "pengarang"=> "Connolly, John", "rating"=> 5);
$data[2] = array("judul"=> "Driven to Extream", "pengarang"=> "Allen, James", "rating"=> 4);
$data[3] = array("judul"=> "Dark Hollow", "pengarang"=> "Connolly, John", "rating"=> 4);
$data[4] = array("judul"=> "Bombay Ice", "pengarang"=> "Forbes, Leslie", "rating"=> 5);

// memisahkan semua elemen dengan kunci yang sama
// menjadi array-array individual
foreach ($data as $kunci => $nilai) {
    $pengarang[$kunci] = $nilai['pengarang'];
    $judul[$kunci] = $nilai['judul'];
    $rating[$kunci] = $nilai['rating'];
}

// mengurutkan berdasarkan rating dan kemudian pengarang
array_multisort($rating, $pengarang, $data);
print_r($data);