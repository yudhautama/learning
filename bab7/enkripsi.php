<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projek: Mengenkripsi Teks</title>
</head>
<body>
<h2>Projek: Mengenkripsi Teks</h2>
<?php
// definisi kelas
class EnkripsiDekripsi{
    // properti
    public $kunci;

    // metode
    // menetapkan kunci enkripsi
    public function setKunci($kunci){
        $this->kunci = $kunci;
    }

    // mendapatkan kunci enkripsi
    public function getKunci(){
        return $this->kunci;
    }

    // enkripsi
    public function enkripsi($plain){
        for ($x=0; $x < strlen($plain); $x++) { 
            $cipher[] = ord($plain[$x]) + $this->getKunci() + ($x * $this->getKunci()); 
        }
        return implode('/', $cipher);
    }

    // dekripsi

    public function dekripsi($cipher){
        $data = explode('/', $cipher);
        $plain = '';
        for ($x=0; $x < count($data) ; $x++) { 
            $plain .= chr($data[$x] - $this->getKunci() - ($x * $this->getKunci()));
        }
        return $plain;
    }
}
?>

<?php
// jika form belum disubmit, tampilkan form
if (!isset($_POST['submit'])) {
?>
<form action="enkripsi.php" method="post">
Masukkan:
<input type="radio" name="tipe" value="P" checked>Plaintext
<input type="radio" name="tipe" value="C" checked>Cipherteks
<br>
<textarea name="teks" cols="40" rows="6" wrap="soft"></textarea>
<p>
Masukkan kunci numerik: <br>
<input type="text" name="kunci" size = "6" >
<p>
<input type="submit" value="submit" name="submit">
</form>
<?php
// jika form belum disubmit, proses masukkan form
} else {
    $tipe = $_POST['tipe'];
    $teks = $_POST['teks'];
    $kunci = (int) $_POST['kunci'];

    // melakukan enkripsi atau dekripsi
    // print output
    $j = new EnkripsiDekripsi;
    $j->setKunci($kunci);

    if ($tipe == 'C') {
        echo $j->dekripsi($teks);
    } else {
        echo $j->enkripsi($teks);
    }
    
}
?>
</body>
</html>