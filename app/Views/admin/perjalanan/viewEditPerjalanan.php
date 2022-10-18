<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>INI EDIT</h1>
    <form method="post" action="\updatePerjalanan\<?=$perjalanan['id_perjalanan'] ?>">
        <label for="kota_awal">Kota Awal</label><br>
        <input type="text" id="kota_awal" name="kota_awal" value="<?=$perjalanan['kota_awal'] ?>"><br>

        <label for="kota_akhir">Kota Akhir</label><br>
        <input type="text" id="kota_akhir" name="kota_akhir" value="<?=$perjalanan['kota_akhir'] ?>"><br>

        <label for="total_km">Total KM</label><br>
        <input type="text" id="total_km" name="total_km" value="<?=$perjalanan['total_km'] ?>"><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>