<<<<<<< Updated upstream
=======
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SISTEM INFORMASI PEMESANAN TIKET</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="stylesheet" href="assets/Arsha/assets/css/style_login.css">


  <!-- Favicons -->
  <link href="assets/Arsha/assets/img/favicon.png" rel="icon">
  <link href="assets/Arsha/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/Arsha/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/Arsha/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/Arsha/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/Arsha/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/Arsha/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/Arsha/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/Arsha/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/Arsha/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.9.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="<?= base_url(); ?>">SIPETIK</a></h1> <!-- mengembalikan pada base url -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#schedule">Schedule</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="view_login">Sign In</a></li>
        </ul>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/Arsha/assets/vendor/aos/aos.js"></script>
  <script src="assets/Arsha/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/Arsha/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/Arsha/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/Arsha/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/Arsha/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/Arsha/assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/Arsha/assets/js/main.js"></script>
  <?= $this->renderSection('content') ?>
</body>
>>>>>>> Stashed changes

<!doctype html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="edit.css">
  </head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <nav class="navbar navbar-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="Home">HOME</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Daftar Tabel</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="Home">Home</a>
                </li>
                <li class="nav-item">

                    <a class="nav-link" href="ViewRegister">Register</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About">About Us</a>
                  </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

      <?= $this->renderSection('content') ?>
  </body>
</html>

