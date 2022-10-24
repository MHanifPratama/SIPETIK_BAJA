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
        <a href = "/viewTambahJadwal" class="btn btn-outline-primary"> Tambah Perjalanan </a>

        <div class="row p-3">
            <table >
                    <thead>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Waktu Keberangan</th>
                            <th scope="col">Aksi</th>
                    </thead>
                    <tbody>
                        <?php ?>
                        <?php foreach ($jadwal as $jdwl) : ?>
                        <tr>
                            <td><?= $jdwl['id_jadwal']?></td><br>
                            <td><?= $jdwl['tanggal']?></td><br>
                            <td><?= $jdwl['waktu_keberangkatan']?></td><br>
                            <td>
                            <form action="/hapusJadwal/<?= $jdwl['id_jadwal'] ?>" method="post">
                                <input type="hidden" name="_method" value="DELETE" />
                                <button type="submit" class="btn btn-dark btn-sm ff-gantari">Hapus</button>
                            </form>
                            </td>
                            <td>
                                <div>
                                    <a href="/editJadwal/<?= $jdwl['id_jadwal'] ?>">Edit</a>
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