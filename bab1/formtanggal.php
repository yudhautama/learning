<?php
$halaman_judul = 'Form Kalender';
include ('C:\xampp\htdocs\learning\bab1\header.html');

// Fungsi ini membuat tiga menu pull-down
// untuk memilih bulan, hari, dan tahun.
function buat_kalender_pulldown()
{
// menciptakan array bulan:
$arraybulan = array(1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

// membuat menu pull-down bulan
echo '<select name="bulan" >';
foreach ($arraybulan as $kunci => $nilai) {
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

} //Akhir dari definisi fungsi

// Menciptakan tag-tag form
echo '<h1>Select a Date:</h1>
<form action="formtanggal.php" method="post">';

// Memanggil fungsi
buat_kalender_pulldown();

echo '</form>';

?>
<?php // mencantumkan footer:
include ('C:\xampp\htdocs\learning\bab1\footer.html');
?>