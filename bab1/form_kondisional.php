<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Form HTML Sederhana</title>
    </head>
<body>
<!-- form.html-->

<form action="kondisional.php" method="POST">

    <fieldset><legend>Masukkan infromasi Anda pada form berikut:</legend>
    <p><b>Nama :</b><input type="text" name="nama" size="20" maxlength="40"/></p>
    <p><b>Alamat Email :</b><input type="text" name="email" size="40" maxlength="60"/></p>
    <p><b>Gender :</b>
    <input type="radio" name="gender" value="P"/> Pria
    <input type="radio" name="gender" value="W"/>Wanita
    </p>
    <p><b>Usia :</b><select name="usia" >
    <option value="0-29">Di bawah 30</option>
    <option value="30-60">Antara 30 dan 60</option>
    <option value="60+">Di atas 60</option>
    </select>
    </p>

    <p><b>Komentar :</b><textarea name="komentar" cols="40" rows="3"></textarea></p>

    </fieldset>

    <div align="center"><input type="submit" name="submit" value="Submit Informasi saya"></div>
</form>
</body>
</html>