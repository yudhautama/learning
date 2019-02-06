<?php
// mendefinisikan fungsi
// yang menghasilkan  lebih dari satu nilai balik
function getInfoUser(){
    return array("RH Sianipar", "fukuoka", "rismon@jepang.domain.edu");
}

// mengekstrak daftar nilai balik ke dalam variabel-variabel secara terpisah
list($nama, $alamat, $email) = getInfoUser();
echo "Nama saya $nama dari $alamat. Hubungi saya di $email";