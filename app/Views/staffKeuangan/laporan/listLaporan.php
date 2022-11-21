<?= $this->extend('template/temDashboard') ?>
    <?= $this->section('contentStaff') ?>
    <script>$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})</script>

        <main id="main" class="main">
            <div class="pagetitle mb-5">
                <h1>Laporan</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboardStaff">Home</a></li>
                        <li class="breadcrumb-item active">Laporan</li>
                    </ol>
                <image.png/nav>
            </div><!-- End Page Title -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Pilih Bulan
</button>
            <section class="section dashboard">
                <div class="row p-3">
                    <table class="table">
                        <thead class="table-dark">
                            <th scope="col">tiket</th>
                            <th scope="col">Email</th>
                            <th scope="col">Total Penumpang</th>
                            <th scope="col">Bus</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Status Pembayaran</th>
                            <th scope="col">Kode Tiket</th>
                        </thead>
                        <tbody class="table-light">
                            <?php ?>
                            <?php foreach ($tiket as $tiket): ?>
                            <tr>
                                <td>
                                    <?= $tiket['id_tiket'] ?>
                                </td>
                                <td>
                                    <?= $tiket['email'] ?>
                                </td>
                                <td>
                                    <?= $tiket['penumpang'] ?>
                                </td>
                                <td>
                                    <?= $tiket['id_bus'] ?>
                                </td>
                                <td>
                                    <?= $tiket['total_harga'] ?>
                                </td>
                                <td>
                                    <?= $tiket['validasi_pembayaran'] ?>
                                </td>
                                <td>
                                    <?= $tiket['kode_tiket'] ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <form method="POST" action="\getLaporanKeuangan">
                            <div class="modal-body">
                            <input type="month" id="tanggal" name="tanggal" placeholder="Tanggal" class="form-control"required>
                            </div>
                            <button id="kirim_tanggal_laporan"name="kirim_tanggal_laporan" type="submit" class="btn btn-primary btn-lg btn-block">Kirim</button>
                    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        </html>

        <?= $this->endSection() ?>