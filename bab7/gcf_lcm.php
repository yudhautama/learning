<?php
// definisi fungsi
// mendapatkan GCF atas dua angka
function getGCF($a, $b){
    if ($b == 0) {
        return $a;
    } else {
        return getGCF($b, $a % $b);
    }
}

// definisi fungsi
// mendapatkan LCM atas dua angka menggunakan GCF
function getLCM($a, $b){
    return($a * $b) / getGCF($a, $b);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projek: GCF dan LCM</title>
</head>
<body>
<h2>Projek: GCF dan LCM</h2>
<?php
// jika form belum disubmit, tampilkan form
if (!isset($_POST['submit'])) {
?>

<form action="gcf_lcm.php" method="post">
Masukkan dua integer: <br />
<input type="text" name="angka_1" size = "3" />
<p>
<input type="text" name="angka_2" size = "3" />
<p>
<input type="submit" value="Submit" name ="submit" />
</form>
<?php
// jika form telah disubmit
// proses masukkan form
} else {
    $angka1 = (int)$_POST['angka_1'];
    $angka2 = (int)$_POST['angka_2'];

    // menghitung dan menampilkan GCF dan LCM
    echo "Anda memasukkan: $angka1, $angka2";
    echo "<br>";
    echo "GCF dari ($angka1, $angka2) = " . getGCF($angka1, $angka2);
    echo "<br>";
    echo "LCM dari ($angka1, $angka2) = " . getLCM($angka1, $angka2);
}
?>
</body>
</html>