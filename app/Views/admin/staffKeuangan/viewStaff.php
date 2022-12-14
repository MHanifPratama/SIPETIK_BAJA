<?= $this -> extend('template/headerAdmin')?>
<?= $this-> section('contentAdmin')?>

<main id="main" class="main">
    <div class="pagetitle mb-5">
      <h1>Staff Keuangan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Data Staff Keuangan</li>
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
        <a href = "/viewTambahStaff" class="btn btn-outline-primary"> Tambah Staff Keuangan </a>

        <div class="row p-3">
            <table class ="table ">
                <thead class="table-dark">
                    <th scope="col">No</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nama Staff</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Aksi</th>
                </thead>
                <tbody class="table-light">
                    <?php ?>
                    <?php foreach ($staff_keuangan as $StaffKeuangan) : ?>
                    <tr>
                        <td><?= $StaffKeuangan['id_akun_staff_keuangan']?></td><br>
                        <td><?= $StaffKeuangan['email']?></td><br>
                        <td><?= $StaffKeuangan['nama_staff']?></td><br>
                        <td><?= $StaffKeuangan['no_hp']?></td><br>
                        <td>
                            <div class="d-flex">
                                <div class="box">
                                    <a class="btn btn-warning bi bi-pencil-fill mr-3 ml-3" href="/editStaff/<?= $StaffKeuangan['id_akun_staff_keuangan'] ?>"></a>
                                </div>
                                <div class="box">
                                    <form action="/hapusStaff/<?= $StaffKeuangan['id_akun_staff_keuangan'] ?>" method="post">
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

