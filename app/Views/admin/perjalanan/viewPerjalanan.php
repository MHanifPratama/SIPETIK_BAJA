<?= $this -> extend('template/headerAdmin')?>
<?= $this-> section('contentAdmin')?>


<main id="main" class="main">
    <div class="pagetitle">
      <h1>Perjalanan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Perjalanan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <a href = "/viewTambahPerjalanan" class="btn btn-outline-primary"> Tambah Perjalanan </a>

        <div class="row p-3">
            <table >
                    <thead>
                            <th scope="col">No</th>
                            <th scope="col">Kota Awal</th>
                            <th scope="col">Kota Akhir</th>
                            <th scope="col">Jarak Tempuh</th>
                            <th scope="col">Aksi</th>
                    </thead>
                    <tbody>
                        <?php ?>
                        <?php foreach ($perjalanan as $prjl) : ?>
                        <tr>
                            <td><?= $prjl['id_perjalanan']?></td><br>
                            <td><?= $prjl['kota_awal']?></td><br>
                            <td><?= $prjl['kota_akhir']?></td><br>
                            <td><?= $prjl['total_km']?></td><br>
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
        </div>
    </section>
</main>
</html>

<?= $this -> endSection() ?>