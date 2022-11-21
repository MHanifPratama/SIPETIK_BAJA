<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<<<<<<< Updated upstream
<table class="table table-hover">
=======

<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="/">SIPETIK</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="/#hero">Home</a></li>
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
<table class="styled-table">
>>>>>>> Stashed changes
            <thead>
                <tr class="table-primary">
                    <th scope="col">tiket</th>
                    <th scope="col">Email</th>
                    <th scope="col">Total Penumpang</th>
                    <th scope="col">Bus</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Status Pembayaran</th>
                    <th scope="col">Kode Tiket</th>
                    <th scope="col">upload Foto</th>
                </tr>
            </thead>
            <tbody>
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
                                <a class="btn btn-warning bi bi-pencil-fill mr-3 ml-3"
                                    href="/uploadFotoPembayaran/<?= $tiket['id_tiket'] ?>">
                                Upload</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</body>
</html>