<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Email : <?=$tiket['email']?></h4>
    <h4>Nomor Kursi : <?=$tiket['nomor_kursi']?></h4>
    <h4>Nama : <?=$tiket['nama']?></h4>
    <h4>No HP : <?=$tiket['no_hp']?></h4>
    <h4>Nama Bus : <?=$tiket['nama_bus']?></h4>
    <h4>Kota Awal : <?=$tiket['kota_awal']?></h4>
    <h4>Kota Tujuan : <?=$tiket['kota_akhir']?></h4>
    <h4>Tanggal Berangkat : <?=$tiket['tanggal']?></h4>
    <h4>Waktu Keberangkatan : <?=$tiket['waktu_keberangkatan']?></h4>
    <h4>Harga : Rp. <?=$tiket['total_harga']?></h4>
    <img src="/assets/img/qr/qr.png" alt="Girl in a jacket" width="100" height="100">
</body>
</html>