<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Projek: Penguji Angka Prima</title>
    </head>
    <body>
    <h2>Projek: Penguji Angka Prima</h2>
    <?php
    //jika form belum disubmit, tampilkan form
    if (!isset($_POST['submit'])) {
    ?>
    <form action="uji_prima.php" method="post">
        Masukan sejumlah angka, dipisahkan dengan koma: <br>
        <input type="text" name="angka" />
        <p>
            <input type="submit" value="Submit" name="submit">
    </form>
    <?php
    } else {
        // membaca angka dari submisi POST
        // mengkonversi ke array dengan memanfaatkan koma
        $stringAngka = $_POST['angka'];
        $arrAngka = explode(',', $_POST['angka']);
        $arrayPrima = array();
        $benderaPrima = 0;

        // beriterasi pada array
        // mendapatkan nilai-nilai absolut untuk tiap angka
        foreach ($arrAngka as $n) {
            $n = trim(abs($n));

            // menguji tiap angka yntuk keprimaan
            // memeriksa angka dengan membaginya dengan
            // semua angka antara 2 dan angka itu sendiri
            // jika selalu menghasilkan sisa,
            // maka angka tersebut adalah angka prima
            for ($i=2; $i<$n ; $i++) { 
                $benderaPrima =0;
                if (($n%$i)== 0) {
                    break;
                }
                $benderaPrima = 1;
            }
            // jika prima
            // tambahkan pada array keluaran
            if ($benderaPrima == 1) {
                array_push($arrayPrima, $n);
            }
        }
        
        // memeriksa apakah ada prima yang ditemukan
        // jika iya, urutkan dan hapus nilai duplikat dari array
        // tampilkan pesan
        if (count($arrayPrima)>0) {
            $arrayPrima = array_unique($arrayPrima);
            sort($arrayPrima);
            echo "Angka-angka berikut adalah prima: " . implode($arrayPrima, ', ');
        } else {
            echo "Tidak ada angka prima yang ditemukan";
        }
    }
    ?>
    </body>
</html>