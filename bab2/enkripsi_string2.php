<?php
// mendefinisikan string password
$password = "tebakaku";

// mendefinisikan salt
$salt = "rosebud";

// mengenkripsi string
$cipher = crypt($password, $salt);

// mengasumsikan pengguna memasukkan ini
$masukan = "tebacak";

// mengenkripsi masuk pengguna
// mengujinya dengan password  yang terenkripsi
echo ($cipher == crypt($masukan, $salt)) ? "Password Cocok" : "Password tidak cocok";
echo "<br>";

// sekarang asumsi pengguna memasukkan ini
$masukan = "tebakaku";

// mengenkripsi pengguna
// mengujinya dengan password yang ternkripsi
echo ($cipher == crypt($masukan, $salt)) ? "Password Cocok" : "Password tidak cocok";
?>