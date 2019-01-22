<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Beasiswa</title>
</head>
<body>
<h2 style = "text-align :center"> Formulir Beasiswa</h2>
    <form name="beasiswa" action="proses_beasiswa.php" method="post">
    <p>Nama Depan :
    <input type="text" name ="dNama"/>
    </p>
    <p>
    Nama Belakang :
    <input type="text" name ="bNama"/>
    </p>    
    <p><input type="reset" value="Bersihkan Form"/>&nbsp; 
    &nbsp;<input type="submit" name="submit" value="Kirim Form"/>
    </p>
    </form>
</body>
</html>