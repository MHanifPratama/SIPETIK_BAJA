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
            <table class="table" >
                    <thead class="table-dark">
                            <th scope="col">No</th>
                            <th scope="col">Nama Bus</th>
                            <th scope="col">Tipe Bus</th>
                            <th scope="col">Nama Supir</th>
                            <th scope="col">Kota Awal</th>
                            <th scope="col">Kota Akhir</th>
                            <th scope="col">Tanggal Keberangan</th>
                            <th scope="col">Waktu Keberangkatan</th>
                            <th scope="col">Aksi</th>
                    </thead>
                    <tbody>
                        <?php ?>
                        <?php foreach ($bus as $Bus) : ?>
                        <tr>
                            <td><?= $Bus['id_bus']?></td><br>
                            <td><?= $Bus['nama_bus']?></td><br>
                            <td><?= $Bus['tipe']?></td>
                            <td><?= $Bus['nama_supir']?></td>
                            <td><?= $Bus['kota_awal']?></td>
                            <td><?= $Bus['kota_akhir']?></td>
                            <td><?= $Bus['tanggal']?></td>
                            <td><?= $Bus['waktu_keberangkatan']?></td>
                            <td>
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