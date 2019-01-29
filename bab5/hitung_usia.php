<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Projek: Hitung Usia</title>
    </head>
    <body>
    <h2>Projek: Hitung Usia</h2>
    <?php
    // jika form belum disubmit
    // menampilkan form
    if (!isset($_POST['submit'])) {
    ?> 
    <form action="hitung_usia.php" method="post">
    Masukkan Tanggal lahir Anda, dalam format mm/dd/yyyy: <br>
    <input type="text" name="dob" />
    <p>
    <input type="submit" value="Submit" name="submit">
    </form>
    <?php
    // jika for disubmit
    //memproses masukan form
    } else { // memecah tanggal menjadi komponen - komponen
        $arrTanggal = explode('/', $_POST['dob']);

        // menghitung timestamp yang terkait dengan nilai tanggal
        $tanggalTs = strtotime($_POST['dob']);

        // menghitung timestamp yang terkait 'today'
        $skrg = strtotime('today');

        // memeriksa apakah nilai yang dimasukkan dalam format yang tepat
        if (sizeof($arrTanggal) != 3) {
            die('ERROR: Silahkan masukkan tanggal lahir yang tepat');
        }

        // memeriksa apakah nilai yang dimasukkan adalah tanggal yang valid
        if (!checkdate($arrTanggal[0], $arrTanggal[1], $arrTanggal[2])) {
            die('ERROR: Silahkan masukkan tanggal lahir yang valid');
        }
        // memeriksa apakah tanggal yang dimasukkan lebih awal dari 'today'
        if ($tanggalTs>=$skrg) {
            die('ERROR: Silahkan masukkan tanggal lahir yang lebih awal dari today');
        }

        // menghitung selisih antara tanggal lahir dan today dalam hari
        // konversi ke tahun
        // konversi hari sisa kebulan
        // menampilkan keluaran
        $usiaHari = floor(($skrg - $tanggalTs) / 86400);
        $usiaTahun = floor($usiaHari / 365);
        $usiaBulan = floor(($usiaHari - ($usiaTahun * 365)) / 30);
        echo "Anda berusia sekitar $usiaTahun Tahun dan $usiaBulan Bulan.";
    }
    ?>
    </body>
</html>