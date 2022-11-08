<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/validasiPembayaranFix/<?=$tiket['id_tiket']?>" method="post" enctype="multipart/">
        <label for="fname">Total Harga:</label><br>
        <input type="text" id="fname" name="fname" readonly value="<?=$tiket['total_harga']?>"><br>
        <label for="fname">First name:</label><br>
        <img src="/assets/img/foto_bukti_pembayaran/<?=$tiket['foto_bukti_pembayaran']?>" alt="Tydack ada Foto"><br>
        <label for="lname">Status Pembayaran</label><br>
        <select id="status_pembayaran" name="status_pembayaran">
            <option value="Belum Lunas">Belum Lunas</option>
            <option value="Lunas">Lunas</option>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>

</html>