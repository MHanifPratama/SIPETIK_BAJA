<?= $this -> extend('template/headerAdmin')?>
<?= $this-> section('contentAdmin')?>

<main id="main" class="main">
    <div class="pagetitle mb-5">
      <h1>Supir</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Data Supir</li>
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
        <a href = "/viewTambahSupir" class="btn btn-outline-primary"> Tambah Supir </a>

        <div class="row p-3">
            <table class ="table" >
                <thead class="table-dark">
                    <th scope="col">No</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Aksi</th>
                </thead>
                <tbody class="table-light">
                    <?php ?>
                    <?php foreach ($supir as $mhs) : ?>
                    <tr>
                        <td><?= $mhs['id_supir']?></td><br>
                        <td><?= $mhs['nama_supir']?></td><br>
                        <td><?= $mhs['nomor_hp_supir']?></td><br>
                        <td>
                            <div class="d-flex">
                                <div class="box">
                                    <a class="btn btn-warning bi bi-pencil-fill mr-3 ml-3" href="/editSupir/<?= $mhs['id_supir'] ?>"></a>
                                </div>
                                <div class="box">
                                    <form action="/hapusSupir/<?= $mhs['id_supir'] ?>" method="post">
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
