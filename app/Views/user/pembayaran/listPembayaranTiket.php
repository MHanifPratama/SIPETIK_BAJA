<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table table-hover">
            <thead>
                <tr class="table-primary">
                    <th scope="col">tiket</th>
                    <th scope="col">Email</th>
                    <th scope="col">Total Penumpang</th>
                    <th scope="col">Nama Bus</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Tanggal Pemesanan Tiket</th>
                    <th scope="col">Tanggal Pelunasan Tiket</th>
                    <th scope="col">Status Pembayaran</th>
                    <th scope="col">Kode Tiket</th>
                    <th scope="col">upload Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php ?>
                <?php foreach ($tiket as $tiket) : ?>

                <tr class="text-center">

                <tr>

                    <td><?= $tiket['id_tiket']?></td>
                    <td><?= $tiket['email']?></td>
                    <td><?= $tiket['penumpang']?></td>
                    <td><?= $tiket['nama_bus']?></td>
                    <td><?= $tiket['total_harga'] ?></td>

                    <td><?= $tiket['tanggal_pemesanan'] ?></td>
                    <td><?= $tiket['tanggal_pelunasan'] ?></td>

                    <td><?= $tiket['validasi_pembayaran']?></td>
                    <td><?= $tiket['kode_tiket'] ?></td>
                    <td>
                        <div class="d-flex">
                            <div class="box">
                                <a class="btn btn-warning bi bi-pencil-fill mr-3 ml-3"
                                    href="/uploadFotoPembayaran/<?= $tiket['id_tiket'] ?>">
                                Upload</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</body>
</html>