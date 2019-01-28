<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Projek: Penentuan Tenda</title>
    </head>
    <body>
        <h2>Projek: Penentuan Tenda</h2>   
<?php
// jika form belum disubmit
// tampilkan form
if(!isset($_POST['submit'])){
?>

<form action="tenda.php" method="post">
Masukkan usia anda : <br/>
<input type="text" name="usia" size="3" />
<p>
<input type="submit" value="Submit" name="submit" />
</p>
</form>
<?php
// jika form sudah disubmit
// proses masukkan form
} else {
    // membaca usia dari POST
    $usia = $_POST['usia'];

    // menugaskan salah satu dari empat tenda
    // berdasarkan usia yg dibaca
    if ($usia <= 9) {
        echo 'Anda ditempatkan di tenda merah.';
    } elseif ($usia> 9 && $usia <=11) {
        echo 'Anda ditempatkan di tenda biru.';
    } elseif ($usia> 11 && $usia <=14) {
        echo 'Anda ditempatkan di tenda hijau.';
    } elseif ($usia> 14 && $usia <=17) {
        echo 'Anda ditempatkan di tenda hitam.';
    } else {
        echo "Anda sebaiknya menghubungi panitia.";
    }
    }
?>
    </body>
</html>