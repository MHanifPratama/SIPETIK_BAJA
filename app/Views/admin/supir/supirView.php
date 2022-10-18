<?= $this -> extend('template/headerAdmin')?>
<?= $this-> section('contentAdmin')?>

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Supir</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Data Supir</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <a href = "/viewTambahSupir" class="btn btn-outline-primary"> Tambah Supir </a>

        <div class="row p-3">
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
                        <td><?= $mhs['id_supir']?></td><br>
                        <td><?= $mhs['nama_supir']?></td><br>
                        <td><?= $mhs['nomor_hp_supir']?></td><br>

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
        </div>
    </section>

</main>
</html>
<?= $this -> endSection() ?>
