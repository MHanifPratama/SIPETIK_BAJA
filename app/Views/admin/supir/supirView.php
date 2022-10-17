<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/viewTambahSupir">Tambah Supir</a>
<table >
        <thead>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">No HP</th>
                <th scope="col">Aksi</th>
        </thead>
            <tbody>
                <?php ?>
                <?php foreach ($supir as $mhs) : ?>
                <tr>
                    <td><?= $mhs['id_supir']?></td>
                    <td><?= $mhs['nama_supir']?></td>
                    <td><?= $mhs['nomor_hp_supir']?></td>
                    <td>
                    <form action="/hapusSupir/<?= $mhs['id_supir'] ?>" method="post">
						<input type="hidden" name="_method" value="DELETE" />
						<button type="submit" class="btn btn-dark btn-sm ff-gantari">Hapus</button>
					</form>
                    </td>
                    <td>
                        <div>
						    <a href="/editSupir/<?= $mhs['id_supir'] ?>">Edit</a>
						</div>
                    </td>
                    
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</body>
</html>