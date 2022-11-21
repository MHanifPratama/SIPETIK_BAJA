<?= $this->extend('template/temDashboard') ?>
    <?= $this->section('contentStaff') ?>
    
        <main id="main" class="main">
            <div class="pagetitle mb-5">
                <h1>Laporan</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboardStaff">Home</a></li>
                        <li class="breadcrumb-item active">Laporan <?=$tanggal?></li>
                        
                    </ol>
                </nav>
            </div><!-- End Page Title -->
            <div class="container">
        <div class="row">
          <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
              <div class="card-block">
                <h6 class="m-b-2">Total Tiket</h6>
                <h8 class="text-right"><i class="bi bi-ticket-perforated m-3"></i>
                  <?= $total_harga?></i><span></span>
                </h8>
                <!-- <p class="m-b-0">Completed Orders<span class="f-right"></span></p> -->
              </div>
            </div>
          </div>

          <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
              <div class="card-block">
                <h6 class="m-b-2">Pemasukan</h6>
                <h8 class="text-right"><i class="bi bi-cash-stack m-3"></i>Rp <?= $total_tiket ?></i><span></span>
                </h8>
                <!-- <p class="m-b-0">Completed Orders<span class="f-right"></span></p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
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
                        <tbody>
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
        </html>

        <?= $this->endSection() ?>