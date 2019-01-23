<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Apakah tahun ini tahun leap?</title>
    </head>
<body>
<?php
date_default_timezone_set('Singapore');
$tahunleap = date('L');
if ($tahunleap==1) {
    echo 'Horee...!!! ini merupakan tahun leap';
} else {
    echo 'Maaf, ini bukan tahun leap.';
}
?>
</body>
</html>