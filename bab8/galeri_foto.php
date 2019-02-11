<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menciptakan galeri foto</title>
</head>
<style type = "text/css">
ul {
    list-style-type: none;
}

li {
    float: left;
    padding: 10px;
    margin: 10px;
    font: bold 10px Verdana, sans-serif;
}

img {
    display: block;
    border: 1px solid #333300;
    margin-bottom: 5px;
}
</style>
<body>
<h2>Projek: menciptakan galeri foto</h2>
<ul>
<?php
// mendefinisikan lokasi direktori
// ini harus lokasi yang dapat diakses oleh pemiik skrip
$dirFoto = 'C:\xampp\htdocs\absensi\assets\img';

// mendefinisikan ekstensi file
$ekstensiFoto =array('gif', 'jpg', 'jpeg', 'tif', 'tiff', 'bmp', 'png');

// menginisialisasi array untuk memuat nama-nama file img
$daftarFoto = array();

//membaca isi direktori
// membuat daftar foto
if (file_exists($dirFoto)) {
    $dp = opendir($dirFoto) or die("ERROR: Tidak dapat membuka direktori");
    while ($file = readdir($dp)) {
        if ($file != '.' && $file != '..') {
            $fileData = pathinfo($file);
            if (in_array($fileData['extension'], $ekstensiFoto)) {
                $daftarFoto[] = "$dirFoto/$file";
            }
        }
    }
    closedir($dp);
} else {
    die('ERROR: Direktori tidak ada');
}


// beriterasi pada tiap foto
// menampilkan tiap img dan nama file
if (count($daftarFoto) > 0) {
    for ($x=0; $x < count($daftarFoto) ; $x++) { 
?>
<li>
<img height="200" widht="200" src = "<?= $daftarFoto[$x];?>">
<?= basename($daftarFoto[$x]);?><br>
<?= round(filesize($daftarFoto[$x])/1024) . ' KB'; ?>
</li>
<?php
    }
} else {
    die("ERROR: Tidak ada img dalam direktori");
}
?>
</ul>
</body>
</html>