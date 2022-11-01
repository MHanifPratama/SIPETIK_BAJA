<?= $this -> extend('template/headerAdmin')?>
<?= $this-> section('contentAdmin')?>


<main id="main" class="main">
    <div class="pagetitle mb-5">
      <h1>Armada Bus</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Armada Bus</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <a href = "/viewTambahBus" class="btn btn-outline-primary"> Tambah Perjalanan </a>

        <div class="row p-3">
            <table >
                    <thead>
                            <th scope="col">No</th>
                            <th scope="col">Nama Bus</th>
                            <th scope="col">Tipe Bus</th>
                            <th scope="col">Nama Supir</th>
                            <th scope="col">Kota Awal</th>
                            <th scope="col">Kota Akhir</th>
                            <th scope="col">Tanggal Keberangan</th>
                            <th scope="col">Waktu Keberangkatan</th>
                    </thead>
                    <tbody>
                        <?php ?>
                        <?php foreach ($bus as $Bus) : ?>
                        <tr>
                            <td><?= $Bus['id_bus']?></td><br>
                            <td><?= $Bus['nama_bus']?></td><br>
                            <td><?= $Bus['tipe']?></td><br>
                            <td><?= $Bus['nama_supir']?></td><br>
                            <td><?= $Bus['kota_awal']?></td><br>
                            <td><?= $Bus['kota_akhir']?></td><br>
                            <td><?= $Bus['tanggal']?></td><br>
                            <td><?= $Bus['waktu_keberangkatan']?></td><br>
                            <td>
<<<<<<< Updated upstream
                            <form action="/hapusBus/<?= $Bus['id_bus'] ?>" method="post">
                                <input type="hidden" name="_method" value="DELETE" />
                                <button type="submit" class="btn btn-dark btn-sm ff-gantari">Hapus</button>
                            </form>
                            </td>
                            <td>
                                <div>
                                    <a href="/editBus/<?= $Bus['id_bus'] ?>">Edit</a>
=======
                                <div class="d-flex">
                                    <div class="box">
                                        <a class="btn btn-warning bi bi-pencil-fill mr-3 ml-3" href="/editBus/<?= $Bus['id_bus'] ?>"></a>
                                    </div>
                                    <div class="box">
                                        <form action="/hapusBus/<?= $Bus['id_bus'] ?>" method="post">
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <button type="submit" class="btn btn-danger bi bi-trash3-fill mr-3 ml-3" onclick="return confirm('Apakah Ingin Menghapus Data ini ?')"></button>
                                        </form>
                                    </div>
>>>>>>> Stashed changes
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