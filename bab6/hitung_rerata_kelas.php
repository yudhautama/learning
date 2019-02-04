<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-eguiv="X-UA-Compatible" content="ie=edge">
            <title>Projek: Menghitung Rerata</title>
    </head>
    <body>
    <h2>Projek: Menghitung Rerata</h2>
<?php
// mendefinisikan array yang memmuat nilai-nilai
// dengan rentang nilai 1 dan 100
$arrayNilai = array(25, 64, 23, 87, 56, 38, 78, 57, 98, 95,
                    81, 67, 75, 76, 74, 82, 36, 39,
                    54, 43, 49, 65, 69, 69, 78, 17, 91
                    );

// menghitung banyaknya nilai
$banyak = count($arrayNilai);

// beriterasi pada arrayNilai
//menghitung total dan atas/bawah 20%
$total = $atas = $bawah = 0;
foreach ($arrayNilai as $g) {
    $total += $g;
    if ($g <= 20) {
        $bawah++;
    }
    if ($g >= 80) {
        $atas++;
    }
}

// menghitung rerata
$rerata = round($total / $banyak);

// menampilkan statistik
echo "Rerata kelas: $rerata <br/>";
echo "Banyaknya siswa ada di 20% bawah : $bawah <br/> ";
echo "Banyaknya siswa ada di 20% atas : $atas <br/> ";
?>
    </body>
</html>