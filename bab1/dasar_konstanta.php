<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Dasar Konstanta</title>
    </head>
    <body>
<?php # dasar_konstanta.php
// Menetapkan tanggal hari ini sebagai konstanta:
define ('HARI_INI', 'August 17, 2014');

// Menampilkan pesan menggunakan konstanta HARI INI:
echo '<p>Hari ini ' . HARI_INI . '<br/> Server ini memiliki versi <b>' . PHP_VERSION . '</b> PHP pada sistem operasi <b>' . PHP_OS . '</b>.</p>';
 ?>   
    </body>
</html>