<?php
// mendefinisikan string yang akan ditulis
$data = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam officiis eius, earum repellendus aliquam, vero non atque, cumque in deserunt cum nemo unde accusamus nihil enim! Cupiditate modi sapiente ea.";

// menulis string ke dalam file
file_put_contents('coba.txt', $data) or die("Tidak dapat menulis ke file");
echo "file berhasil ditulis.";