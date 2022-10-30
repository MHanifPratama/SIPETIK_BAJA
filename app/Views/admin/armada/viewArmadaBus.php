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
                            <form action="/hapusBus/<?= $Bus['id_bus'] ?>" method="post">
                                <input type="hidden" name="_method" value="DELETE" />
                                <button type="submit" class="btn btn-dark btn-sm ff-gantari">Hapus</button>
                            </form>
                            </td>
                            <td>
                                <div>
                                    <a href="/editBus/<?= $Bus['id_bus'] ?>">Edit</a>
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