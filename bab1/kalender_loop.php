<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Kalender Menggunakan Loop</title>
    </head>
<body>
    <form action="kalender_loop.php" method="post">
<?php
// skrip ini menciptakan tiga menu pull-down
//untuk sebuah form HTML: bulan, hari, tahun.

// menciptakan array bulan:
$bulan = array(1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

// membuat array hari dan tahun:
$hari = range (1,31);
$tahun = range (2008, 2019);

// membuat menu pull-down bulan
echo '<select name="bulan" >';
foreach ($bulan as $kunci => $nilai) {
    echo "<option value=\"$kunci\">$nilai</option>\n";
}
echo '</select>';

// membuat menu pull-down hari
echo '<select name="hari" >';
for ($hari = 1; $hari <= 31; $hari++) {
    echo "<option value=\"$hari\">$hari</option>\n";
}
echo '</select>';

// membuat menu pull-down tahun
echo '<select name="tahun" >';
for ($tahun = 2008; $tahun <= 2019; $tahun++) {
    echo "<option value=\"$tahun\">$tahun</option>\n";
}
echo '</select>';

?>
    </form>
</body>
</html>