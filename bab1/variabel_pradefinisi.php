<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Dasar PHP</title>
</head>
<body>
    <p>Ini Merupakan HTML standar</p>
    <?php # variabel_pradefinisi.php
    $file = $_SERVER['SCRIPT_FILENAME'];
    $user = $_SERVER['HTTP_USER_AGENT'];
    $server = $_SERVER['SERVER_SOFTWARE'];

    // Menampilkan nama skrip ini :
    echo "<p>Anda sedang menjalankan file: <br/><b>$file</b>.</p>\n";

    //Menampilkan informasi user:
    echo "<p>Anda sedang melihat halaman ini menggunakan :<br/><b>$user</b></p>\n";

    //Menampilkan informasi server:
    echo "<p>Server ini:</br><b>$server</b>.</p>\n"
    ?>
</body>
</html>