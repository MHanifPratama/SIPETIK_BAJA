<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/viewTambahTipeBus">Tambah TipeBus</a>
<table >
        <thead>
                <th scope="col">No</th>
                <th scope="col">Tipe Bus</th>
                <th scope="col">Harga</th>
        </thead>
            <tbody>
                <?php ?>
                <?php foreach ($tipe_bus as $tipe) : ?>
                <tr>
                    <td><?= $tipe['id_tipe']?></td>
                    <td><?= $tipe['tipe']?></td>
                    <td><?= $tipe['harga']?></td>
                    <td>
                    <form action="/hapusTipe/<?= $tipe['id_tipe'] ?>" method="post">
						<input type="hidden" name="_method" value="DELETE" />
						<button type="submit" class="btn btn-dark btn-sm ff-gantari">Hapus</button>
					</form>
                    </td>
                    <td>
                        <div>
						    <a href="/editTipe/<?= $tipe['id_tipe'] ?>">Edit</a>
						</div>
                    </td>
                    
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</body>
</html>