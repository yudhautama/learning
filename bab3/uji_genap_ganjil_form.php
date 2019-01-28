<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Projek: Penguji Angka Ganjil/Genap</title>
    </head>
    <body>
        <h2>Projek: Penguji Angka Ganjil/Genap</h2>   
<?php
// jika form belum disubmit
// tampilkan form
if(!isset($_POST['submit'])){
?>

<form action="uji_genap_ganjil_form.php" method="post">
Masukkan nilai : <br/>
<input type="text" name="angka" size="3" />
<p>
<input type="submit" value="Submit" name="submit" />
</p>
</form>
<?php
// jika form sudah disubmit
// proses masukkan form
} else {
    // membaca angka dari POST
    $angka = $_POST['angka'];

    // menguji nilai
    // tampilkan pesan
    if (($angka % 2) == 0) {
        echo 'Anda memasukkan ' . $angka . ', yang merupakan  angka genap.';
    } else {
        echo 'Anda memasukkan ' . $angka . ', yang merupakan  angka ganjil.';
    }
    
    }
?>
    </body>
</html>