<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Projek: Kirim Pesan</title>
    </head>
    <body>
    <h2>Projek: Kirim Pesan</h2>
<?php
if (isset($_POST['submit'])) {
    $judul = stripslashes($_POST['judul']);
    $nama = stripslashes($_POST['nama']);
    $pesan = stripslashes($_POST['pesan']);

    // mengganti karakter '~' dengan karakter '-'
    $judul = str_replace("~", "-", $judul); 
    $nama = str_replace("~", "-", $nama); 
    $pesan = str_replace("~", "-", $pesan);
    $rekamanPesan = "$judul~$nama~$pesan\n";
    $filePesan = fopen("PapanPesan/pesan.txt", "ab");

    if ($filePesan === FALSE) {
        echo "Ada error pada pesan anda!\n";
    } else {
        fwrite($filePesan, $rekamanPesan);
        fclose($filePesan);
        echo "Pesan Anda telah tersimpan.\n";
    }
}
?>
<h1>Kirim Pesan Baru</h1>
<hr>
<form action="kirim_pesanI.php" method="post">
<span style = "font-weight:bold">Judul:</span>
<input type="text" name="judul" />
<span style = "font-weight:bold">Nama:</span>
<input type="text" name="nama" /><br>
<textarea name="pesan" cols="80" rows="6"></textarea><br>
<input type="submit" value="Kirim Pesan" name="submit">
<input type="reset" value="Reset Form" name = "reset">
</form>
<hr>
<p>
    <a href="papan_pesanI.php">Lihat Pesan</a>
    </body>
</html>