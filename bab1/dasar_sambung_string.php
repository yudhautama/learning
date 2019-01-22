<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dasar Penggunaan String</title>
</head>
<body>
    <?php # dasar_sambung_string.php
    // Menciptakan variabel-variabel:
    $nama_depan = 'Melissa';
    $nama_belakang = 'Bank';
    $pengarang = $nama_depan . ' ' . $nama_belakang;

    $buku = 'The Girls\' Guide to Hunting and Fishing';

    //Menampilkan nilai-nilai:
    echo "<p>Buku dengan judul <em>$buku</em> ditulis oleh $pengarang.</p>";
    ?>
</body>
</html>