<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Projek: Menempatkan data pegawai ke dalam database</title>
        <style type = "text/css">
        div#pesan {
            text-align:center;
            margin-left:auto;
            margin-right:auto;
            width:40%;
            border:solid 2px green;
        }
        </style>
    </head>
    <body>
<h2>Projek: Menempatkan data pegawai ke dalam database</h2>
<h3>Menambahkan pegawai baru</h3>
<?php
// mencoba terhubung database
$mysqli = new mysqli("localhost", "root", "", "pegawai");
if ($mysqli === false) {
    die("ERROR: Tidak dapat terhubung." . mysqli_connect_error());
}

// jika form disubmit
// proses masukkan form
if (isset($_POST['submit'])) {
    // membuka blok pesan
    echo '<div id="pesan">';

    // membaca dan memeriksa nilai-nilai masukan
    $errorMasukan = false;
    if (empty($_POST['nama'])) {
        echo "ERROR: Silahkan masukkan nama pegawai yang valid";
        $errorMasukan = true;
    } else {
        $nama = $mysqli->escape_string($_POST['nama']);
    }

    if ($errorMasukan != true && empty($_POST['jabatan'])) {
        echo "ERROR: Silahkan masukkan jabatan yang valid";
        $errorMasukan = true;
    } else {
        $jabatan = $mysqli->escape_string($_POST['jabatan']);
    }
    
    // menambahkan nilai-nilai ke database menggunakan query INSERT
    if ($errorMasukan != true) {
        $sql = "INSERT INTO tbl_pegawai (nama, jabatan) VALUES ('$nama', '$jabatan')";
        if ($mysqli->query($sql)=== true) {
            echo "Rekaman pegawai baru ditambahkan dengan ID: " . $mysqli->insert_id;
        } else {
            echo "ERROR: Tidak dapat mengeksekusi query: $sql. " . $mysqli->error;
        }
    }

    // menutup blok pesan
    echo "</div>";
}
?>
</div>
<form action="pegawai_baru.php" method="post">
Nama pegawai : <br>
<input type="text" name="nama" size = "40">
</p>
Jabatan pegawai : <br>
<input type="text" name="jabatan" size="40">
</p>
<input type="submit" value="Submit" name="submit">
</form>

<h3>Daftar Pegawai</h3>
<?php
// membaca rekaman
// diformat sebagai tabel HTML
$sql = "SELECT id, nama, jabatan FROM tbl_pegawai";
if ($hasil = $mysqli->query($sql)) {
    if ($hasil->num_rows > 0) {
        echo "<table>\n";
        echo "<tr class = \"heading\">\n";
        echo "<td>ID</td>\n";
        echo "<td>Nama</td>\n";
        echo "<td>Jabatan</td>\n";
        echo "</tr>\n";

        while ($baris = $hasil->fetch_object()) {
            echo "<tr>\n";
            echo "<td>" . $baris->id . "</td>\n";
            echo "<td>" . $baris->nama . "</td>\n";
            echo "<td>" . $baris->jabatan . "</td>\n";
            echo "</tr>\n";
        }

        echo "</table>";
        echo $hasil->close();
    } else {
        echo "Tidak ada pegawai dalam database";
    }
    } else {
    echo "ERROR: Tidak dapat mengeksekusi query: $sql." . $mysqli->error;
}

// menutup koneksi
$mysqli->close();
?>
    </body>
</html>