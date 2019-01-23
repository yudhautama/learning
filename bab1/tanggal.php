<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Berapa banyak hari pada bulan ini?</title>
    </head>
<body>
<?php
date_default_timezone_set('Singapore');
$bulan = date('n');
    if ($bulan==1) {
        echo '31';
    }
    if ($bulan==2) {
        echo '28 (Kecuali jika tahun leap)';
    }
    if ($bulan==3) {
        echo '31';
    }
    if ($bulan==4) {
        echo '30';
    }if ($bulan==5) {
        echo '31';
    }
    if ($bulan==6) {
        echo '30';
    }
    if ($bulan==7) {
        echo '31';
    }
    if ($bulan==8) {
        echo '31';
    }
    if ($bulan==9) {
        echo '30';
    }
    if ($bulan==10) {
        echo '31';
    }
    if ($bulan==11) {
        echo '30';
    }
    if ($bulan==12) {
        echo '31';
    }
    ?>
</body>
</html>