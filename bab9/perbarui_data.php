<?php
// mencoba terhubung ke database
$mysqli = new mysqli("localhost", "root", "", "karyawan");
if ($mysqli === false) {
    die("ERROR: Tidak terhubung ke database." . mysqli_connect_error());
}

// mencoba megeksekusi query
// memperbarui sebuah rekaman
$sql = "UPDATE pic SET nama_pic = 'yudha' WHERE id_pic = 11";
if ($mysqli->query($sql) === true) {
    echo $mysqli->affected_rows . ' diperbarui.';
} else {
    echo "ERROR: Tidak dapat mengeksekusi query: $sql. " . $mysqli->error();
}

// menutup koneksi
$mysqli->close();