<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Cari Film Favoritku!</title>
    </head>
    <body>
<?php
//tambahkan baris ini:
$filmfavku = urlencode('Fast and Furious');

//ubah baris ini:
echo "<a href=\"situsfilm.php?filmfav=$filmfavku\">";
echo 'Klik di sini untuk melihat informasi film favoritku!';
echo '</a>';
 ?>   
    </body>
</html>