<?php
// mencoba terhubung ke database
$mysqli = new mysqli("localhost", "root", "", "karyawan");
if ($mysqli == false) {
    die("ERROR: Tidak dapat terhubung ke database. " . mysqli_connect_error());
}

// mencoba mengeksekusi query
// menambah sebuah rekaman baru
$sql = "INSERT INTO pic (nama_pic) VALUES ('yudha')";
if ($mysqli->query($sql) === true) {
    echo "PIC baru dengan id:" . $mysqli->insert_id . " ditambahkan.";
} else {
    echo "ERROR: Tidak dapat mengeksekusi query: $sql. " . $mysqli->error;
}

// menutup koneksi
$mysqli->close();
