<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>INI EDIT Tipe Bus</h1>
    <form method="post" action="\updateTipe\<?=$tipe['id_tipe'] ?>">
        <label for="tipe">Tipe Bus</label><br>
        <input type="text" id="tipe" name="tipe" value="<?=$tipe['tipe'] ?>"><br>

        <label for="harga">Harga/km</label><br>
        <input type="text" id="harga" name="harga" value="<?=$tipe['harga'] ?>"><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>