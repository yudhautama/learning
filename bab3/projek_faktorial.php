<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Projek: Menghitung Faktorial</title>
    </head>
    <body>
        <h2>Projek: Menghitung Faktorial</h2>   
<?php
// jika form belum disubmit
// tampilkan form
if(!isset($_POST['submit'])){
?>

<form action="projek_faktorial.php" method="post">
Masukkan sebuah angka : <br/>
<input type="text" name="angka" size="3" />
<p>
<input type="submit" value="Submit" name="submit" />
</p>
</form>
<?php
// jika form sudah disubmit
// proses masukkan form
} else {
    // membaca dari masukkan form POST
    $angka = $_POST['angka'];

    // memeriksa apakah angka tersebut positif
        if ($angka <= 0) {
            echo 'ERROR: Silahkan Masukkan Angka > 0';
            exit();
        }
    // menghitung faktorial
    // dengan mengalikan angka tersebut dengan
    // semua angka antara dirinya dan 1
    $faktorial = 1;
    for ($x=$angka; $x > 1; $x--) { 
        $faktorial *= $x;
    }
    echo "Faktorial dari $angka adalah: $faktorial";
    }
?>
    </body>
</html>