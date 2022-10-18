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
    <form method="post" action="\updateSupir\<?= $Supir['id_supir'] ?>">
        <label for="nama_supir">Name Supir</label><br>
        <input type="text" id="nama_supir" name="nama_supir" value="<?=$Supir['nama_supir']?>" ><br>
        <label for="nomor_hp_supir">No Hp</label><br>
        <input type="text" id="nomor_hp_supir" name="nomor_hp_supir" value= "<?=$Supir['nomor_hp_supir']?>">
        <input type="submit" value="Submit">
    </form>
</body>
</html>