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
    function tampilUlangForm($nama_depan, $nama_belakang){?>

    <h2 style = "text-align :center"> Formulir Beasiswa</h2>
    <form name="beasiswa" action="proses_beasiswaB.php" method="post">
    <p>Nama Depan :
    <input type="text" name ="dNama" value = "<?php echo $nama_depan; ?>"/>
    </p>
    <p>
    Nama Belakang :
    <input type="text" name ="bNama" value = "<?php echo $nama_belakang; ?>"/>
    </p>    
    <p><input type="reset" value="Bersihkan Form"/>&nbsp; 
    &nbsp;<input type="submit" name="submit" value="Kirim Form"/>
    </p>
    </form>
    <?php }

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
        echo "Silahkan isi kembali informasi berikut. <br/>\n";
        tampilUlangForm($nama_depan, $nama_belakang);
    }else {
        echo "Terima kasih telah mengisi formulir beasiswa, ".$nama_depan." ".$nama_belakang . ".";
    }
    ?>
</body>
</html>