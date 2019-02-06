<?php
// mendefinisikan sebuah fungsi
function suatuFungsi(){
    // mendapatkan banyak argumen yang dileawtkan
    $bnykArgumen = func_num_args();

    //membaca semua argumen
    $argumen = func_get_args();

    // menampilkan tiap argumen
    echo "Anda mengirimku argumen-argumen berikut: ";
    for ($x=0; $x < sizeof($argumen) ; $x++) { 
        echo "\nArgumen $x: ";

        // memeriksa apakah sebuah array dilewatkan
        // beriterasi dan menampilkan isi jika demikian
        if (is_array($argumen[$x])) {
            echo "ARRAY ";
            foreach ($argumen[$x] as $indeks => $elemen) {
                echo "$indeks => $elemen ";
            }
        } else {
            echo "$argumen[$x] ";
        }
        
    }
}

// memanggil fungsi dengan argumen-argumen yang berbeda
suatuFungsi("merah", "hijau", "biru", array(4,5), "kuning");