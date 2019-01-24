<?php
$halaman_judul = 'Kalkulator Biaya Belanja';
include ('C:\xampp\htdocs\learning\bab1\header.html');

/* Fungsi ini menghitung total dan kemudian menampilkan hasil.  */
function hitung_total($kts, $biaya, $pjk = 5){
    $total = ($kts * $biaya) ;
    $besar_pajak = ($pjk / 100);
    $total += ($total * $besar_pajak);
    
    return number_format($total, 2);
}
// Memeriksa submisi form
if (isset($_POST['submitted'])) {

    // Validasi form minimal
    if (is_numeric($_POST['kuantitas']) && is_numeric($_POST['harga'])) {

        echo '<h1>Biaya Total</h1>';
        
        // Memanggil fungsi dengan atau tanpa pajak
        if (is_numeric($_POST['pajak'])) {
            $jum = hitung_total ($_POST['kuantitas'], $_POST['harga'], $_POST['pajak']);
        } else {
            $jum = hitung_total ($_POST['kuantitas'], $_POST['harga']);
        }
        $total = ($_POST['kuantitas'] * $_POST['harga']);
        $besar_pajak = ($_POST['pajak'] / 100);
        $total += ($total * $besar_pajak);

        // Menampilkan hasil:
        echo '<h1>Biaya Total</h1>
        <p>Biaya Total Belanja sebanyak ' . $_POST['kuantitas'] . ' barang dengan masing-masing seharga Rp.' . number_format ($_POST['harga'], 2) . ', termasuk pajak sebesar ' . $_POST['pajak'] . '%, adalah Rp.' . number_format ($total,2) . '.</p>';

    } else { // nilai yang disubmit tak-valid
        echo '<h1>Error</h1>
        <p class ="error">Silahkan masukkan kuantitas, harga, dan pajak yang valid</p>';
    }
} // akhir dari IF
// Tinggalkan bagian PHP dan ciptakan form HTML
?>

<h1>Kalkulator Biaya Belanja</h1>
<form action="kalkulator_sticky_form.php" method="post">
<p>Kuantitas: <input type="text" name="kuantitas" size="5" maxlength="5" value="<?php if (isset($_POST['kuantitas'])) {
    echo $_POST['kuantitas']; 
    }?>"></p>
<p>Harga: <input type="text" name="harga" size="5" maxlength="10" value="<?php if (isset($_POST['harga'])) {
    echo $_POST['harga']; 
    }?>"></p>
<p>Pajak (%): <input type="text" name="pajak" size="5" maxlength="5" value="<?php if (isset($_POST['pajak'])) {
    echo $_POST['pajak']; 
    }?>"></p>
<p><input type="submit" name="submit" value="Hitung!"></p>
<p><input type="hidden" name="submitted" value="1"></p>
</form>

<?php // mencantumkan footer:
include ('C:\xampp\htdocs\learning\bab1\footer.html');
?>