<?php
// mendefinisikan kelas
class koordinatXY{
    public $data;
    public function __construct(){
        $this->data = array($x, $y);
    }
}

// mendefinisikan kelas
class Pemetaan{
    // medefinisikan metode teroverload
    public function __call($metode, $arg){
        // memeriksa nama metode
        if ($metode=="peta"){
            $jumArg = count($arg);
        // mengeksekusi kode yang berbeda
        // berdasarkan jumlah argumen yang dilewatkan
        if ($jumArg == 1) {
            echo "Pemetaan sebuah titik...\n";
        } else if($jumArg == 2){
            echo "Pemetaan sebuah garis...\n";
        } else if ($jumArg >= 3) {
            echo "Pemetaan sebuah poligon...\n";
        } else {
            die("ERROR: Data tak cukup\n");
        }
        
    } else {
            die("ERROR: Metode tak dikenal '$metode'\n");
        }
    }
}

// menciptakan objek
$r = new Pemetaan();

// memanggil metode dengan satu argumen
$r->peta(new koordinatXY(1,2));

// memanggil metode dengan dua argumen
$r->peta(new koordinatXY(1,2), new koordinatXY(20,6));

// memanggil metode dengan tiga argumen
$r->peta(new koordinatXY(1,2), new koordinatXY(20,6), new koordinatXY(4,4), new koordinatXY(18,4));