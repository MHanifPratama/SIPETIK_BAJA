<!DOCTYPE html>
<html lang="en">
<head>
<head>
   <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pembayaran Tiket</title>
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

          <li><a class="nav-link scrollto " href="/#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="/PembayaranTiket">Riwayat Tiket</a></li>
          <li><a class="nav-link scrollto" href="/logout">Logout</a></li>

      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Pembayaran Tiket</h2>
      <ol>
        <li><a href="/">Home</a></li>

        <li>Pembayaran Tiket</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<div class="row justify-content-center">

<div class="row">
</div>
    <div class="col-md-5">
        <div class="alert alert-danger mt-3" role="alert">
            <h3 class="text-center">PERINGATAN!</h3>
            <p class="text-center">Diharapkan untuk tidak merefresh halaman supaya tidak terjadi kegagalan dalam proses transaksi.</p>
        </div>
        <div class="card">

            <div class="card-body">
                <h3 class="text-success text-center">SELAMAT KAMU BERHASIL MELAKUKAN PEMESANAN!</h3>
                <h5 class="text-info text-center">Silahkan Lakukan Pembayaran Sesuai Detail Berikut</h5>

                <div class="row">
                    <div class="col-md-5 ml-1">
                        <div class="card" style="width: 18rem;">
                        <!-- src="assets/Arsha/assets/img/team/GOPAY.png" -->
                            <img class="card-img-top" src="<?php echo base_url('assets/Arsha/assets/img/team/GOPAY.png')?>" alt="gopay">
                            <div class="card-body">
                                <p class="card-text">082202128373 a.n SIPETIK BAJA</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 ml-1">
                        <div class="card" style="width: 18rem;">
                            <!-- <img class="card-img-top" src="assets/Arsha/assets/img/team/DANA.png" alt="Card image cap"> -->
                            <img class="card-img-top" src="<?= base_url('assets/Arsha/assets/img/team/DANA.png')?>" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">082202128373 a.n SIPETIK BAJA</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 mt-1 mr-2">
                <div class="card" style="width: 18rem;" >
                    <!-- <img class="card-img-top" src="assets/Arsha/assets/img/team/BNI.png" alt="Card image cap"> -->
                    <img class="card-img-top" src="<?= base_url('assets/Arsha/assets/img/team/BNI.png')?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">21224352 a.n SIPETIK BAJA</p>
                    </div>
                </div>
            </div>

            <div class="col-md-5 ml-3 mt-1">
                <div class="card" style="width: 18rem;" >
                    <!-- <img class="card-img-top" src="assets/Arsha/assets/img/team/MANDIRI.png" alt="Card image cap"> -->
                    <img class="card-img-top" src="<?= base_url('assets/Arsha/assets/img/team/MANDIRI.png')?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">12324523 a.n SIPETIK BAJA</p>
                    </div>
                </div>
            </div>

                </div>


                <h6>Total Pembayaran yang harus dibayar</h6>
                <h4><?= $dataTiket['total_harga'] ?></h4>
                <hr>
                <h6>Kode Tiket</h6>
                <h4><?= $dataTiket['kode_tiket'] ?></h4>
                <form action="/simpan_foto_pembayaran/<?= $tiket ?>" method="post" enctype="multipart/form-data">
                    <div class=" border-0 mb-3 text-tertiary ff-gantari">
                        <label for="formFile" class="form-label">Upload Foto Bukti Transfer</label>
                        <input class="form-control" type="file" id="foto_bukti_pembayaran" name="foto_bukti_pembayaran">
                    </div>
                    <button type="submit" class="btn btn-primary text-dark ff-gantari"><i class="fa fa-paper-plane"></i>
                        Submit</button>
                </form>
                <hr><br><br>
               

            </div>
        </div>
    </div>
</div>


 <!-- ======= Footer ======= -->
 <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>SIPETIK</h3>
        <p>
          A108 Adam Street <br>
          New York, NY 535022<br>
          United States <br><br>
          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> info@example.com<br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Join Our Newsletter</h4>
        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>

    </div>
  </div>
</div>

<div class="container">

  <div class="copyright-wrap d-md-flex py-4">
    <div class="me-md-auto text-center text-md-start">
      <div class="copyright">
        &copy; Copyright <strong><span>Techie</span></strong>. All Rights Reserved
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