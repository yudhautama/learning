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
            <title>
                <?php
                if (isset($_GET['filmfav'])) {
                    echo ' - ';
                    echo $_GET['filmfav'];
                }
                ?>
            </title>
    </head>
    <body>
<?php include 'header.php'; ?>
<?php
$arrayfilmfav =array('Maleficient', 'Fast and furious', 'The holy Grail', 'Die Hard', 'Matrix', 'Terminator', 'Star Trek', 'Battle Ship', 'Godfather', 'Mummy'
);

if (isset($_GET['filmfav'])) {
    echo 'Selamat datang ke situs kami, ';
    echo $_SESSION ['username'];
    echo '! <br/>';
    echo 'Film Favorit saya adalah ';
    echo $_GET['filmfav'];
    echo '<br/>';
    $ratingfilm = 5;
    echo 'Rating yang saya berikut untuk film ini adalah : ';
    echo $ratingfilm ;
}
else {
    echo 'Daftar ' . $_POST['jum'] . ' film favoritku ';
    if (isset($_POST['sorted'])) {
        sort ($arrayfilmfav);
        echo '(terurut secara alfabetik)';
    }
    echo 'adalah: <br/>';
    
    $jumdaftar = 0;
    echo '<ol>';
    while ($jumdaftar < $_POST['jum']) {
        echo '<li>';
        echo $arrayfilmfav[$jumdaftar];
        echo '</li>';
        $jumdaftar = $jumdaftar + 1 ;
    }
    echo '</ol>';
}
?>   
    </body>
</html>