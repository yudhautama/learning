<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Dasar Pengurutan Array</title>
    </head>
<body>
<table border="0" cellspacing = "3" cellpadding = "3" align = "center">
<tr>
<td><h2>Rating</h2></td>
<td><h2>Judul</h2></td>
</tr>
<?php # dasar_pengurutan_array.php
// Menciptakan array
$arrayfilm  = array(
    10 => 'Casablanca', 
    9 => 'To Kill a Mockingbrid', 
    2 => 'The English Patient', 
    8 => 'Stranger Than fiction', 
    5 => 'Story of the Weeping Camel', 
    7 => 'Donnie Darko', 
);

// Menampilkan array film dengan urutan asli
echo '<tr><td colspan="2"><b>Urutan Asli:</b></td></tr>';
foreach ($arrayfilm as $kunci => $nilai) {
    echo "<tr><td>$kunci</td>
         <td>$nilai</td></tr>\n";
}

// Menampilkan array film diurutkan berdasarkan judul
asort($arrayfilm);

echo '<tr><td colspan="2"><b>Diurutkan berdasarkan Judul:</b></td></tr>';
foreach ($arrayfilm as $kunci => $nilai) {
    echo "<tr><td>$kunci</td>
         <td>$nilai</td></tr>\n";
}

// Menampilkan array film diurutkan berdasarkan rating
ksort($arrayfilm);

echo '<tr><td colspan="2"><b>Diurutkan berdasarkan rating:</b></td></tr>';
foreach ($arrayfilm as $kunci => $nilai) {
    echo "<tr><td>$kunci</td>
         <td>$nilai</td></tr>\n";
}
?>
</table>  
</body>
</html>