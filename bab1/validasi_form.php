<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Validasi Form HTML</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css" title="text/css" media="all">
    .error {
        font-weight: bold;
        color: #C00
    }
    </style>
</head>
<body>
    <?php
// Memvalidasi nama:
if (!empty($_REQUEST['nama'])) {
    $nama=$_REQUEST['nama'];
}else {
    $nama=NULL;
    echo '<p class ="error"> Anda Lupa memasukkan nama Anda!</p>';
}

// Memvalidasi email:
if (!empty($_REQUEST['email'])) {
    $email=$_REQUEST['email'];
}else {
    $email=NULL;
    echo '<p class ="error"> Anda Lupa memasukkan alamat email Anda!</p>';
}
    
// Memvalidasi komentar:
if (!empty($_REQUEST['komentar'])) {
    $komentar=$_REQUEST['komentar'];
}else {
    $komentar=NULL;
    echo '<p class ="error"> Anda Lupa memasukkan komentar Anda!</p>';
}  

// Memvalidasi gender
if (isset($_REQUEST['gender'])) {
    $gender=$_REQUEST['gender'];

    if ($gender=="P") {
        echo "<p>Selamat siang, Pak!</p>";
    } elseif ($gender=="W") {
        echo "<p>Selamat siang, Bu!</p>";
    } else{ // Nilai tak bisa diterima
        $gender=NULL;
        echo '<p class="error">Gender tidak berupa "P" atau "W"!</p>';
    }
}else { // $_REQUEST['gender'] tidak ditetapkan
    $gender=NULL;
    echo '<p class="error"> Anda Lupa memilih gender Anda!</p>';
}  

// Jika semuanya OK, tampilkan pesan:
    if ($nama && $email && $gender && $komentar) {
        echo "<p>Terimakasih, <b>$nama</b>, untuk komentar:<Br/><tt>$komentar</tt></p>
        <p>Kami akan mengirim balasan ke <i>$email</i>.</p>\n";
    } else { // Nilai form tidak ada
        echo '<p class="error">Silahkan isi form kembali.</p>';
    }
    ?>
</body>
</html>