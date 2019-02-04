<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Projek: Papan Pesan</title>
    </head>
    <body>
        <h2>Projek: Papan Pesan</h2>
<?php
if (!file_exists("PapanPesan/pesan.txt")|| (filesize("PapanPesan/pesan.txt")==0) ) {
    echo "<p>Ada error pada pesan yang dikirimkan.</p>\n";
} else {
    $arrayPesan = file("PapanPesan/pesan.txt");
    echo "<table style =\"background-color:lightgray\" border = \"1\" width = \"100%\">\n";
    $kounter = count($arrayPesan);

    for ($i=0; $i < $kounter; ++$i) { 
        $pesanSkrg = explode("~", $arrayPesan[$i]);
        echo "<tr>\n";
        echo "<td width = \"5%\" style = \"text-align:center;font-weight:bold\">" . 
        ($i + 1) . "</td>\n";
        echo "<td width =\"95%\"><span style =\"font-weight:bold\">Judul:</span> " .
        htmlentities($pesanSkrg[0]) . "<br/>\n";
        echo "<span style = \"font-weight:bold\">Nama:</span>" . 
        htmlentities($pesanSkrg[1]) . "<br/>\n";
        echo "<span style =\"text-decoration:underline;font-weight:bold\">Pesan</span><br/>\n" .
        htmlentities($pesanSkrg[2]) . "<br/>\n";
        echo "</tr>\n";
    }
    echo "</table>";
}
?>
<p>
    <a href="kirim_pesan.php">Kirim Pesan Baru</a>
</p>   
    </body>
</html>