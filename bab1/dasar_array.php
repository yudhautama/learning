<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Validasi Form HTML</title>
        <style type ="text/css" title="text/ css" media="all">
        .error{
            font-weight: bold;
            color: #C00
        }
        </style>
    </head>
<body>
<?php # dasar_array.php
// Menampilkan infromasi yang disubmit:
if (!empty($_POST['nama']) && !empty($_POST['komentar']) && !empty($_POST['email'])) {
    echo "<p>Terimakasih, <b>{$_POST['nama']}</b>, untuk komentar berikut:<br/><tt>{$_POST['komentar']}</tt></p>
    <p>Kami akan mengirimkan balasan ke <i>{$_POST['email']}</i>.</p>\n";
} else {
    echo '<p class="error">Silahkan isi form kembali.</p>';
}
?>
</body>
</html>