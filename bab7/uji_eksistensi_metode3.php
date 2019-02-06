<?php
// kelas contoh
class Kucing {
    // memeriksa apakah sebuah metode ada di dalam kelas sendiri
    public function meonk(){
        return method_exists($this, "kucingMeonk");
    }
}

// menciptakan objek kelas
$kucingGarong = new Kucing;

// menghasilkan false karena Kucing::kucing Meong() tidak terdefinisi
echo $kucingGarong->meonk() ? "Lihat, itu tidak seperti kucing garong" : "itu mirip sekali dengan kucing garong!";