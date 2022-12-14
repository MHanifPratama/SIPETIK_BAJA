<?= $this -> extend('template/headerAdmin')?>
<?= $this-> section('contentAdmin')?>


<main id="main" class="main">
    <div class="pagetitle mb-5">
      <h1>Jadwal</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Jadwal</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <?php if(session()->getFlashdata('sukses')) : ?>
  <div class = "alert alert-success alert-dismissible show fade">
    <div class = "alert-body">

    <b>Sukses</b>
    <?=session() -> getFlashdata ('sukses')?>
    </div>
  </div>
  <?php endif; ?>

  <?php if(session()->getFlashdata('update')) : ?>
  <div class = "alert alert-warning alert-dismissible show fade">
    <div class = "alert-body">

    <b>Sukses</b>
    <?=session() -> getFlashdata ('update')?>
    </div>
  </div>
  <?php endif; ?>

    <section class="section dashboard">
        <a href = "/viewTambahJadwal" class="btn btn-outline-primary"> Tambah Jadwal </a>

        <div class="row p-3">
            <table class="table">
                    <thead class="table-dark">
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Waktu Keberangan</th>
                            <th scope="col">Aksi</th>
                    </thead>
                    <tbody class="table-light">
                        <?php ?>
                        <?php foreach ($jadwal as $jdwl) : ?>
                        <tr>
                            <td><?= $jdwl['id_jadwal']?></td><br>
                            <td><?= $jdwl['tanggal']?></td><br>
                            <td><?= $jdwl['waktu_keberangkatan']?></td><br>
                            <td>
                                <div class="d-flex">
                                    <div class="box">
                                        <a class="btn btn-warning bi bi-pencil-fill mr-3 ml-3" href="/editJadwal/<?= $jdwl['id_jadwal'] ?>"></a>
                                    </div>
                                    <div class="box">
                                        <form action="/hapusJadwal/<?= $jdwl['id_jadwal'] ?>" method="post">
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