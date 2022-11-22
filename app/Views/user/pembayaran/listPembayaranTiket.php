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
  <link href="assets/Arsha/assets/img/favicon.png" rel="icon">
  <link href="assets/Arsha/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/Arsha/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/Arsha/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/Arsha/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/Arsha/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/Arsha/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/Arsha/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/Arsha/assets/css/style_home_baru.css" rel="stylesheet">

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

  <main id="main">

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

<div class="container-table">

<?php if(session()->getFlashdata('sukses')) : ?>
  <div class = "alert alert-success alert-dismissible show fade">
    <div class = "alert-body">

    <b>Sukses</b> <br>
    <?=session() -> getFlashdata ('sukses')?>
    </div>
  </div>
  <?php endif; ?>
  
<table class="styled-table">

            <thead>
                <tr class="table-primary">
                    <th scope="col">tiket</th>
                    <th scope="col">Email</th>
                    <th scope="col">Total Penumpang</th>
                    <th scope="col">Nama Bus</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Tanggal Pemesanan Tiket</th>
                    <th scope="col">Tanggal Pelunasan Tiket</th>
                    <th scope="col">Status Pembayaran</th>
                    <th scope="col">Nomor Kursi</th>
                    <th scope="col">Kode Tiket</th>
                    <th scope="col">upload Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php ?>
                <?php foreach ($tiket as $tiket) : ?>

                <tr class="text-center">

                <tr>

                    <td><?= $tiket['id_tiket']?></td>
                    <td><?= $tiket['email']?></td>
                    <td><?= $tiket['penumpang']?></td>
                    <td><?= $tiket['nama_bus']?></td>
                    <td><?= $tiket['total_harga'] ?></td>

                    <td><?= $tiket['tanggal_pemesanan'] ?></td>
                    <td><?= $tiket['tanggal_pelunasan'] ?></td>

                    <td><?= $tiket['validasi_pembayaran']?></td>
                    <td><?= $tiket['nomor_kursi']?></td>
                    <td><?= $tiket['kode_tiket'] ?></td>
                    
                    <td>
                    <?php if($tiket['validasi_pembayaran'] == 'Belum Lunas'):?>
                        <div class="d-flex">
                            <div class="box">
                                <a class="btn btn-warning bi bi-upload mr-3 ml-3"
                                    href="/uploadFotoPembayaran/<?= $tiket['id_tiket'] ?>">
                                </a>
                            </div>
                        </div>
                    <?php else:?>
                        <div class="d-flex">
                            <div class="box">
                                <a class="btn btn-success bi bi-printer-fill mr-3 ml-3"
                                    href="/cetakTiket/<?= $tiket['id_tiket'] ?>">
                                </a>
                            </div>
                        </div>
                    <?php endif?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
                </div>
        </main><!-- End #main -->
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
<script src="assets/Arsha/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/Arsha/assets/vendor/aos/aos.js"></script>
<script src="assets/Arsha/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/Arsha/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/Arsha/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/Arsha/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/Arsha/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/Arsha/assets/js/main.js"></script>

</body>

</html>