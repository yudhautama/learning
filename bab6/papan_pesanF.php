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
if (isset($_GET['action'])) {
    if ((file_exists("PapanPesan/pesan.txt")) && (filesize("PapanPesan/pesan.txt")!=0)) {
        $arrayPesan = file("PapanPesan/pesan.txt");
    }
    switch ($_GET['action']) {
        case 'Hapus Pertama':
            array_shift($arrayPesan);
            break;

        case 'Hapus Terakhir':
            array_pop($arrayPesan);
            break;

        case 'Hapus Pesan':
        if(isset($_GET['pesan']))
            array_splice($arrayPesan, $_GET['pesan'], 1);
            break;

        case 'Hapus Duplikat':
        $arrayPesan = array_unique($arrayPesan);
        $arrayPesan = array_values($arrayPesan);
        break;

    } // Akhir statmen switch

    if (count($arrayPesan)>0) {
        $pesanBaru = implode($arrayPesan);
        $simpanPesan = fopen("PapanPesan/pesan.txt", "wb");

        if ($simpanPesan === false) 
            echo "Ada error pada saat memperbarui file \n";
        else {
            fwrite($simpanPesan, $pesanBaru);
            fclose($simpanPesan);
        }
    }
    else
    unlink("PapanPesan/pesan.txt");
} 

if ((!file_exists("PapanPesan/pesan.txt"))|| (filesize("PapanPesan/pesan.txt")==0) ) 
    echo "<p>Tidak ada pesan yang dikirimkan.</p>\n";
else {
    $arrayPesan = file("PapanPesan/pesan.txt");
    echo "<table style =\"background-color:lightgray\" border = \"1\" width = \"100%\">\n";
    $kounter = count($arrayPesan);
    for ($i=0; $i < $kounter ; $i++) { 
        $pesanSkrg = explode("~", $arrayPesan[$i]);
        $arrayPesanKunci[$pesanSkrg[0]] = $pesanSkrg[1] . "~" . $pesanSkrg[2];
    }
    $indeks =1;

    foreach ($arrayPesanKunci as $pesan) { 
        $pesanSkrg = explode("~", $pesan);
        echo "<tr>\n";
        echo "<td width = \"5%\" style = \"text-align:center\"><span style =\"font-weight:bold\" >" . 
        $indeks . "</span></td>\n";
        echo "<td width =\"85%\"><span style =\"font-weight:bold\">Judul:</span> " .
        htmlentities(key($arrayPesanKunci)) . "<br/>\n";
        echo "<span style = \"font-weight:bold\">Nama:</span>" . 
        htmlentities($pesanSkrg[1]) . "<br/>\n";
        echo "<td width=\"10%\"style =\"text-align:center\">" .
        "<a href='papan_pesanC.php?action=Hapus%20Pesan&" . 
        "pesan=$i'>" . "Hapus Pesan ini</a></td>\n"; 
        echo "</tr>\n";
        ++$indeks;
        next($arrayPesanKunci);
    }
}
?>
<p>
    <a href="kirim_pesanF.php">Kirim Pesan Baru</a><br>
    <a href="papan_pesanF.php?action=Hapus%20Pertama">Hapus Pesan Pertama</a><br>
    <a href="papan_pesanF.php?action=Hapus%20Akhir">Hapus Pesan Terakhir</a><br>
</p>   
    </body>
</html>