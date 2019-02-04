<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Projek: Pemilihan Topping Pizza</title>
    </head>
    <body>
    <h2>Projek: Pemilihan Topping Pizza</h2>
    Anda memilih topping berikut: <br>
    <ul>
    <?php
    foreach ($_POST['topping'] as $t) {
        echo "<li>$t</li> \r\n";
    }
    ?>
    </ul>    
    </body>
</html>