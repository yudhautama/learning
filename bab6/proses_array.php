<?php
// mendefinisikan array berindeks
$arrayIndex = array("Joni", "Jono", "Harto", "Santi", "Monika");

// memproses dan menampilkan elemen-elemen array satu persatu
foreach ($arrayIndex as $i) {
    print_r ("$i | ");
    
}
?>

<?php
// mendefinisikan array asosiatif
$arrayAsosiatif = array("IND"=>"Jakarta",
"US"=>"Washington",
"FR"=>"Paris",
"UK"=>"London"
);

// memproses dan menampilkan elemen-elemen array satu persatu
foreach ($arrayAsosiatif as $kunci => $nilai) {
    print_r("$kunci: $nilai");
    print_r ("<br />");
}

?>