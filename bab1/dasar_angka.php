<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Dasar Angka</title>
    </head>
    <body>
<?php # dasar_angka.php
// Menetapkan variabel-variabel:
$kuantitas = 30;
$harga = 119.95;
$pajak = .05; // 5% pajak 

// Menghitung total:
$total = $kuantitas * $harga;
$total = $total + ($total * $pajak); // Menambahkan Pajak

// Memformat nilai :
$total = number_format($total, 2);

// Menampilkan hasil:
echo '<p>Anda membeli <b>' . $kuantitas . '</b> pisang goreng dengan masing-masing seharga <b>Rp.' . $harga . '</b>. Termasuk pajak, total menjadi <b>Rp.' . $total. '</b>.</p>';
 ?>   
    </body>
</html>