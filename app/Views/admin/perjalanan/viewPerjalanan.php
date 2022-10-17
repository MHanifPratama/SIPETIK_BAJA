<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/viewTambahPerjalanan">Tambah Perjalanan</a>
<table >
        <thead>
                <th scope="col">No</th>
                <th scope="col">Kota Awal</th>
                <th scope="col">Kota Akhir</th>
                <th scope="col">Total KM</th>
        </thead>
            <tbody>
                <?php ?>
                <?php foreach ($perjalanan as $prjl) : ?>
                <tr>
                    <td><?= $prjl['id_perjalanan']?></td>
                    <td><?= $prjl['kota_awal']?></td>
                    <td><?= $prjl['kota_akhir']?></td>
                    <td><?= $prjl['total_km']?></td>
                    <td>
                    <form action="/hapusPerjalanan/<?= $prjl['id_perjalanan'] ?>" method="post">
						<input type="hidden" name="_method" value="DELETE" />
						<button type="submit" class="btn btn-dark btn-sm ff-gantari">Hapus</button>
					</form>
                    </td>
                    <td>
                        <div>
						    <a href="/editPerjalanan/<?= $prjl['id_perjalanan'] ?>">Edit</a>
						</div>
                    </td>
                    
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</body>
</html>