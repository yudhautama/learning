<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Memproses Formulir Beasiswa</title>
</head>
<body>
    <h2>Memproses Formulir Beasiswa</h2>
    <?php
    $nama_depan = $_POST['dNama'];
    $nama_belakang = $_POST['bNama'];

    echo "Terima kasih telah mengisi formulir beasiswa, ".$nama_depan." ".$nama_belakang . ".";
    ?>
</body>
</html>