<?php
// mendefinisikan kelas basis
class Anjing {
    // mendefinisikan beberapa properti
    public $nama;
    public $umur;

    // medefinisikan beberapa metode
    public function __construct(){
        echo "Menciptakan Seekor Anjing.\n";
    }

    public function goyangEkor(){
        echo "Hmmm...Anjing ini bahagia sekali!.\n";
    }
}

// menggunakan refleksi untuk menginspeksi kelas
$reflector = new ReflectionClass('Anjing');

// daftar konstanta
echo "Daftar Konstanta: ";
foreach ($reflector->getConstants() as $kunci => $nilai) {
    echo "$kunci=$nilai ";
}
echo "\n";

// daftar properti
echo "Daftar properti: ";
$arrVar = $reflector->getProperties();

foreach ($arrVar as $obj) {
    echo $obj->getName() . " ";
}
echo "\n";

// daftar metode
echo "Daftar metode: ";
$arrMetode = $reflector->getMethods();
foreach ($arrMetode as $obj) {
    echo $obj->getName() . " ";
}
echo "\n";
?>