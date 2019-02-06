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

// mewarisi kelas
class bloodhound extends Anjing{
    // mendefinisikan properti lain
    public $warna;

    // mendefinisikan beberapa metode lain
    public function cium(){
        echo "Anjing ini dapat mencium makanan beberapa kilometer jauhnya\n";
    }

    public function __destruct(){
        echo "Menghancurkan seekor Anjing.\n";
    }
}

// menciptakan objek dari kelas terderivasi
$anjingku = new bloodhound;
$anjingku->nama = "Bleki";
$anjingku->umur = 5;
$anjingku->warna = "hitam";

// membaca nama kelas dari objek kelas
echo "Kelas: " . get_class($anjingku) . "\n";

// membaca nama kelas induk dari induk objek kelas
echo "Kelas Induk: " . get_parent_class(get_class($anjingku)) . "\n";

// membaca dan menampilkan daftar properti kelas
$arrVar = get_class_vars(get_class($anjingku));
echo "Properti-properti kelas: ";
foreach ($arrVar as $kunci => $nilai) {
    if (!isset($nilai)) {
        $nilai = "<undef>";
    }
    echo "$kunci=$nilai ";
}
echo "\n";

// membaca dan menampilkan daftar metode objek
$arrMetode =  get_class_methods(get_class($anjingku));
echo "Metode - metode kelas: ";
foreach($arrMetode as $m){
    echo "$m";
}
echo "\n";

// membaca dan menampilkan daftar properti objek
$arrVar = get_object_vars($anjingku);
echo "Properti-properti objek: ";

foreach ($arrVar as $kunci => $nilai) {
    if (!isset($nilai)) {
        $nilai = "<undef>";
    }
    echo "$kunci=$nilai ";
}
echo "\n";
?>