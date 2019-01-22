<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Memproses Formulir Beasiswa</title>
</head>
<body>
    <h2>Memproses Formulir Beasiswa</h2>
    <?php
    function tampilDiperlukan($bidangNama){
        echo "Bidang \"$bidangNama\" perlu diisi.<br/>\n";
    }
    
    function validasiMasukan($data, $bidangNama){
        global $hitungError;
        if (empty($data)) {
            tampilDiperlukan($bidangNama);
            ++$hitungError;
            $nilaiBalik = "";
        } else { // hanya membersihkan masukan jika tak kosong
            $nilaiBalik = trim($data);
            $nilaiBalik = stripslashes($nilaiBalik);
        }
        return ($nilaiBalik);
    }
    $hitungError = 0;

    $nama_depan = validasiMasukan($_POST['dNama'], "Nama depan");
    $nama_belakang = validasiMasukan($_POST['bNama'], "Nama belakang");

    if ($hitungError>0) {
        echo "Silahkan gunakan tombol \"Back\" untuk mengisi-ulang data.<br/>\n";
    }else {
        echo "Terima kasih telah mengisi formulir beasiswa, ".$nama_depan." ".$nama_belakang . ".";
    }
    ?>
</body>
</html>