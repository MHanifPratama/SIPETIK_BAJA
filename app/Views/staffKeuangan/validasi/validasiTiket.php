<?= $this->extend('template/temDashboard') ?>
    <?= $this->section('contentStaff') ?>

        <main id="main" class="main">
            <div class="pagetitle mb-5">
                <h1>validasi Tiket</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboardStaff">Home</a></li>
                        <li class="breadcrumb-item active">Validasi Tiket</li>

                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <form action="/validasiPembayaranFix/<?= $tiket['id_tiket'] ?>" method="post" enctype="multipart/">
                <div class="form-row">
                    <div class="form-group col-md-6 mb-1">
                        <label for="fname">Total Harga:</label><br>
                        <input class="form-control" type="text" id="fname" name="fname" readonly
                            value="<?= $tiket['total_harga'] ?>"><br>
                    </div>

                    <div class="form-group col-md-6 mb-1">
                        <label for="status_pembayaran">Status Pembayaran</label>
                        <select id="status_pembayaran" class="form-control" name="status_pembayaran">
                            <option selected value="Belum Lunas">Belum Lunas</option>
                            <option value="Lunas">Lunas</option></option>
                        </select>
                    </div>
                    
                    <img class="buktiPembayaran mt-3 mb-3" src="/assets/img/foto_bukti_pembayaran/<?= $tiket['foto_bukti_pembayaran'] ?>"
                        alt="Tydack ada Foto"><br>
                    
                    <div class="form-group col-md-6 mb-1">   
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </div>
            </form>
            </body>

            </html>

            <?= $this->endSection() ?>