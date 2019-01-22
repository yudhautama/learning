<?php
session_start();
// Memeriksa apakah pengguna telah login dengan password yang valid
if($_SESSION['authuser'] !=1) {
    echo 'Maaf, tetapi Anda tidak memiliki izin melihat halaman ini!';
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Situs Film Favorit</title>
    </head>
    <body>
<?php
echo 'Selamat datang ke situs kami, ';
echo $_SESSION['username'];
echo '! <br/>';
echo 'Film Favorit saya adalah ';
echo $_GET['filmfav'];
echo '<br/>';
$ratingfilm = 5;
echo 'Rating yang saya berikut untuk film ini adalah : ';
echo $ratingfilm ;
 ?>   
    </body>
</html>