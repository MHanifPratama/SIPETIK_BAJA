
<?= $this -> extend('template/temDashboard')?>
<?= $this-> section('contentStaff')?>

<main id="main" class="main">
    <div class="pagetitle mb-5">
      <h1>Validasi Tiket</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboardStaff">Home</a></li>
          <li class="breadcrumb-item active">Validasi Tiket</li>

        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row p-3">
            <table class="table">
                <thead class="table-dark">
                        <th scope="col">Tiket</th>
                        <th scope="col">Email</th>
                        <th scope="col">Total Penumpang</th>
                        <th scope="col">Bus</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Status Pembayaran</th>
                        <th scope="col">Kode Tiket</th>
                        <th scope="col">Validasi Tiket</th>

                </thead>
                <tbody class="table-light">
                    <?php ?>
                    <?php foreach ($tiket as $tiket) : ?>
                    <tr>
                        <td><?= $tiket['id_tiket']?></td>
                        <td><?= $tiket['email']?></td>
                        <td><?= $tiket['penumpang']?></td>
                        <td><?= $tiket['id_bus']?></td>
                        <td><?= $tiket['total_harga'] ?></td>
                        <td><?= $tiket['validasi_pembayaran']?></td>
                        <td><?= $tiket['kode_tiket'] ?></td>
                        <td>
                            <div class="d-flex">
                                <div class="box">
                                    <a class="btn btn-success bi bi-check-square mr-3 ml-3"
                                        href="/validasitiket/<?= $tiket['id_tiket'] ?>"></a>
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

