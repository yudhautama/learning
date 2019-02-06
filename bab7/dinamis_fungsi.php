<?php
// mendefinisikan fungsi
function cariMinyak(){
    // mendefinisikan fungsi bersarang
    // fungsi ini  menjadi tersedia
    // hanya ketika fungsi luar telah dipanggil
    function mulaiTambang(){
        echo "Mulai menambang. Kita akan kaya!\n";
    }
    echo "Sumur minyak ditemukan. Hati-hati jangan meledak!\n";
}

// menjalankan fungsi
cariMinyak();
mulaiTambang();