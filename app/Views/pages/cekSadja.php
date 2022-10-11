<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
    <th>Bus</th>
    <th>nama</th>
    <th>tipe</th>
    <th>Asal</th>
    <th>Tujuan</th>
    <th>Harga</th>
  </tr>
  <?php ?>
  <?php foreach ($bus as $mhs) : ?>
  <tr>
    <td><?= $mhs['id_bus']?></td>
    <td><?= $mhs['nama_bus']?></td>
    <td><?= $mhs['tipe']?></td>
    <td><?= $mhs['kota_awal']?></td>
    <td><?= $mhs['kota_akhir']?></td>
    <td><?= $mhs['harga'] * $mhs['total_km']?></td>
  </tr>
  <?php endforeach; ?>
    </table>
</body>
</html>