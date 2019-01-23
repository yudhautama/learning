<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Menangani form HTML</title>
    </head>
<body>
<?php # tangani_form.php
// Menciptakan singkatan untuk data form:
$nama = $_REQUEST['nama'];
$email = $_REQUEST['email'];
$komentar = $_REQUEST['komentar'];

/* Tidak digunakan:
$_REQUEST['usia']
$_REQUEST['gender']
$_REQUEST['submit']
*/

//Menampilkan infromasi yang disubmit:
echo "<p>Terimakasih, <b>$nama</b>, untuk memberikan komentar:<br /><tt>$komentar</tt></p>
<p>kami akan mengirimkan balasan ke <i>$email</i>.</p>\n";

if (isset($_REQUEST['gender'])) {
    $gender=$_REQUEST['gender'];

    if ($gender=="P") {
        echo "<p>Selamat siang, Pak!</p>";
    } elseif ($gender=="W") {
        echo "<p>Selamat siang, Bu!</p>";
    } 
}

?>
</body>
</html>