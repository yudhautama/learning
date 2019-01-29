<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Projek : Registrasi Anggota</title>
    </head>
    <body>
    <h2>Projek : Registrasi Anggota</h2>
<?php
// membaca detil dari POST
$nama = $_POST['nama'];
$usia = $_POST['usia'];
$alamat = $_POST['alamat'];
$profesi = $_POST['profesi'];
$residen = $_POST['residen'];

// memvalidasi data yg disubmit
// memeriksa nama
if (empty($nama)) {
    die('ERROR: Silahkan isi nama Anda');
}

// memeriksa profesi
if (empty($profesi)) {
    die('ERROR: Silahkan isi profesi Anda');
}

// memeriksa alamat
if (empty($alamat)) {
    die('ERROR: Silahkan isi alamat Anda');
}

// memeriksa usia
if (empty($usia)) {
    die('ERROR: Silahkan isi usia Anda');
} elseif ($usia < 18 || $usia > 60) {
    die("ERROR: Keanggotaan hanya untuk usia 18 sampai 60 tahun");
}

// memeriksa status residensial
if (strcmp($residen, 'no') == 0) {
    die('ERROR: Keanggotaan hanya untuk yang berstatus residen.');
}

// sampai titik ini semua masukkan telah melewati validasi
// formulasikan dan kirim email
$ke = 'registrasi@tertentu.domain.com';
$dari = 'webmaster@tertentu.domain.com';
$judul = 'Aplikasi untuk Keanggotaan';

$tubuh = "Nama: $nama\r\nAlamat: $alamat\r\nUsia: $usia\r\nProfesi: $profesi\r\nStatus residensial: $residen\r\n";

if (mail($ke, $judul, $tubuh, "From: $dari")) {
    echo 'Terimakasih atas aplikasi Anda';
} else {
    die('ERROR: Error pengiriman email');
}
?>
    </body>
</html>