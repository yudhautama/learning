<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projek: Menampilkan File dalam direktori</title>
</head>
<body>
    <h2>Projek: Menampilkan File dalam direktori</h2>
    <?php
    $dir = "img";
    $bukaDir = opendir($dir);

    while ($fileSkrg = readdir($bukaDir)){
        if ((strcmp($fileSkrg, '.') != 0) && (strcmp($fileSkrg, '..') != 0))
            echo "<a href=\"fi les/" . $fileSkrg . "\">" . $fileSkrg . "</a><br>\n";
        
    }
    closedir($bukaDir);
    ?>
</body>
</html>