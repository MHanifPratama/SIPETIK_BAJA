<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pemesanan Tiket</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url("assets/Arsha/assets/img/favicon.png")?>" rel="icon">
  <link href="<?= base_url("assets/Arsha/assets/img/apple-touch-icon.png")?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?= base_url("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i")?>" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url("assets/Arsha/assets/vendor/aos/aos.css")?>" rel="stylesheet">
  <link href="<?= base_url("assets/Arsha/assets/vendor/bootstrap/css/bootstrap.min.css")?>" rel="stylesheet">
  <link href="<?= base_url("assets/Arsha/assets/vendor/bootstrap-icons/bootstrap-icons.css")?>" rel="stylesheet">
  <link href="<?= base_url("assets/Arsha/assets/vendor/boxicons/css/boxicons.min.css")?>" rel="stylesheet">
  <link href="<?= base_url("assets/Arsha/assets/vendor/glightbox/css/glightbox.min.css")?>" rel="stylesheet">
  <link href="<?= base_url("assets/Arsha/assets/vendor/swiper/swiper-bundle.min.css")?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url("assets/Arsha/assets/css/style_home_baru.css")?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Techie - v4.9.1
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="/">SIPETIK</a></h1>

      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="/">Home</a></li>
          <li><a class="nav-link scrollto " href="/PembayaranTiket">Riwayat Tiket</a></li>
          <li><a class="nav-link scrollto" href="/logout">Logout</a></li>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

        <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Pemesanan Tiket</h2>
            <ol>
              <li><a href="/">Home</a></li>
              <li>Pemesanan Tiket</li>
            </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <section id="hero3" class="d-flex align-items-center">
	    <div class="container">
        <div class="row">

            <form method="post" action="/menuPembayaran">
              <div class="form-row">
                <div class="form-group col-md-6 mb-3">
                  <label>Nama Lengkap<span class="required">*</span></label>
                  <input class="form-control" type="text" placeholder="Nama Lengkap" required  id="nama" name="nama" value="<?= user()->nama_pelanggan?>"/>
                </div>

                <div class="row">
                  <div class="form-group col-md-3 mb-3">   
                    <label>Email <span class="required">*</span></label>
                    <input class="form-control" type="text" placeholder="Masukkan Email" readonly required id="email" name="email" value ="<?= user()->email?>">
                  </div>
                  <div class="form-group col-md-3 mb-3">     
                    <label>No. Telp <span class="required">*</span></label>
                    <input class="form-control" type="text" placeholder="Masukkan Nomor HP" required name="no_hp" id="no_hp" value="<?= user()->nomor_hp_pelanggan?>">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-3 mb-3">
                    <label>Kota Asal<span class="required">*</span></label>
                    <input class="form-control" type="text" placeholder="Masukkan Email" readonly  required id="" name="" value ="<?= $bus['kota_awal']?>">
                  </div>   
                  <div class="form-group col-md-3 mb-3">
                    <label>Kota Tujuan<span class="required">*</span></label>
                    <input class="form-control" type="text" placeholder="Masukkan Email" readonly  required id="" name="" value ="<?= $bus['kota_akhir']?>">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-3 mb-3">
                    <label>Harga<span class="required">*</span></label>
                    <input class="form-control" type="text" placeholder="Masukkan Email" readonly  required id="total_harga" name="total_harga" value ="<?= $bus['total_km'] * $bus['harga'] ?>">
                  </div> 
                  <div class="form-group col-3 mb-3">     
                    <label>Nama Bus <span class="required">*</span></label>
                    <input class="form-control" type="text" placeholder="Masukkan Email" readonly  required id="" name="" value ="<?= $bus['nama_bus']?>">
                  </div>
                </div>
                
                <div class="input-box">
                  <input type="text" placeholder="Id Bus" hidden  required id="harga" name="id_bus" value ="<?= $bus['id_bus']?>">
                </div>

                <div class="form-group col-md-6 mb-3">
                  <img class="img-fluid " src=" <?= base_url("assets/Arsha/assets/img/kursi.png")?>" alt="">
                </div>

                <div class="form-group col-md-6 mb-3"> 
                  <label>Penumpang<span class="required">*</span></label>
                  <input class="form-control" type="text" placeholder="Masukkan Jumlah Penumpang" readonly required name="penumpang" id="penumpang" value="1"> 
                </div>
                
                <div class="row">
                  <div class="form-group col-md-3 mb-3"> 
                    <label>Nomor Kursi<span class="required">*</span></label>
                      <select name="nomor_kursi" id="nomor_kursi" class="form-control">
                      <option selected>Nomor kursi</option>
                        <?php foreach ($kueriCek as $kursi): ?>
                          <option name="penumpang" id="penumpang" value="<?= $kursi?>"><?= $kursi?></option>
                        <?php endforeach; ?>
                      </select>
                  </div>
                  <div class="form-group col-md-3 mb-3"> 
                      <label>Tanggal Keberangkatan<span class="required">*</span></label>
                      <input class="form-control" type="text" placeholder="Tanggal" readonly  required id="" name="" value ="<?= $bus['tanggal']?>">
                  </div>

                </div>
                
                <button type="submit" class="btn btn-outline-primary">Pesan Tiket</button>
              </div>
            </form>

        </div>
      </div>
    </section>  

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>SIPETIK</h3>
            <p>
              Jalan Soekarno Hatta No. 25 <br>
              Rajabasa, Bandar Lampung<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 811 7913 800<br>
              <strong>Email:</strong> sipetikbaja.official@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Menu User</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Riwayat Tiket us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Beli Tiket</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Jadwal Tiket</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Cek This Out</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Schedule</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Our Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Referral</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Support Kami</h4>
            <p>Support kami dengan selalu gunakan aplikasi ini !</p>
          </div>

        </div>
      </div>
    </div>

    <div class="container">

      <div class="copyright-wrap d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong><span>SIPETIK</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url("assets/Arsha/assets/vendor/purecounter/purecounter_vanilla.js")?>"></script>
  <script src="<?= base_url("assets/Arsha/assets/vendor/aos/aos.js")?>"></script>
  <script src="<?= base_url("assets/Arsha/assets/vendor/bootstrap/js/bootstrap.bundle.min.js")?>"></script>
  <script src="<?= base_url("assets/Arsha/assets/vendor/glightbox/js/glightbox.min.js")?>"></script>
  <script src="<?= base_url("assets/Arsha/assets/vendor/isotope-layout/isotope.pkgd.min.js")?>"></script>
  <script src="<?= base_url("assets/Arsha/assets/vendor/swiper/swiper-bundle.min.js")?>"></script>
  <script src="<?= base_url("assets/Arsha/assets/vendor/php-email-form/validate.js")?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url("assets/Arsha/assets/js/main.js")?>"></script>

</body>

</html>