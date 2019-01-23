<?php 
// hapus baris ini : setcookie('username', 'Rismon', time() + 60);
session_start();
$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['authuser'] = 0;

// memeriksa informasi username dan password
if(($_SESSION['username'] == 'Rismon') and ($_SESSION['userpass'] == '12345')){
    $_SESSION['authuser'] = 1;
}else {
    echo 'Maaf, tetapi Anda tidak memiliki izin melihat halaman ini!';
    exit ();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Cari Film Favoritku!</title>
    </head>
    <body>
<?php include 'header.php'; ?>
<?php

//tambahkan baris ini:
$filmfavku = urlencode('Fast and Furious');

//ubah baris ini:
echo "<a href=\"situsfilm.php?filmfav=$filmfavku\">";
echo 'Klik di sini untuk melihat informasi film favoritku!';
echo '</a>';
 ?>   
<br/>
<br/>
Atau pilih berapa banyak film yang Anda sukai:
<br/>
<form action="situsfilm.php" method="post">
<p>Masukkan jumlah film (sampai dengan 10):
    <input type="text" name="jum" maxlength="2" size ="2" />
    <br>
   Centang untuk mengurutkan secara alfabetik:
    <input type="checkbox" name="sorted">
</p>
<input type="submit" name="submit" value ="Submit"/>
</form>
    </body>
</html>