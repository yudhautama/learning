<?php
// mencoba untuk terhubung ke database
$mysqli = new mysqli("localhost", "root", "", "karyawan");
if ($mysqli == false) {
    die("ERROR: Tidak bisa terhubung. ". mysqli_connect_error());
}

// mencoba untuk mengeksekusi query
// beriterasi pada himpunan hasil
// menampilkan tiap rekaman pada bidang-bidang
$sql = "SELECT nik, nama_kyn FROM tbl_karyawan";
if ($hasil = $mysqli->query($sql)) {
    if ($hasil->num_rows > 0) {
        while ($baris = $hasil->fetch_object()) {
            echo $baris->nik . ":" . $baris->nama_kyn . "\n";
        }
        $hasil->close();
    } else {
        echo "Tidak ada rekaman yang sesuai dengan query Anda.";
    }
} else {
    echo "ERROR: Tidak bisa mengeksekusi $sql. " . $mysqli->error;
}

// menutup koneksi
$mysqli->close();