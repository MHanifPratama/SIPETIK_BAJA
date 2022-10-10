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
  </tr>
  <?php ?>
  <?php foreach ($bus as $mhs) : ?>
  <tr>
    <td><?= $mhs['id_bus']?></td>
    <td><?= $mhs['nama_bus']?></td>
    <td><?= $mhs['id_tipe']?></td>
  </tr>
  <?php endforeach; ?>
    </table>
</body>
</html>