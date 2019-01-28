<?php
// mendefinisikan string password
$password = "tebakaku";

// mendefinisikan salt
$salt = "rosebud";

// mengenkripsi string
$cipher = crypt($password, $salt);
echo $cipher;

?>