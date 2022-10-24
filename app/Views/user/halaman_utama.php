<!DOCTYPE html>
<html lang="en">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="edit.css">
  </head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <nav class="navbar navbar-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">HOME</a>
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
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="beli_tiket.php">Pesan Tiket Bus</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="lihat_tiket.php">Lihat Tiket</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="profile.php">Akun</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/logout">Log Out</a>
                  </li>
              </ul>
            </div>
          </div>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/Arsha/assets/css/style_hu.css">
    <title>Pesan Tiket</title>
</head>
<body class="main_bg">

    <div class="form">
        <div class="form-text">
            <h1>Book Now</h1>
            <p>Tes.</p>

<div class="container">
    <div class="title">Pesan Tiket</div>
    <div class="content">
      <form action="/prosesTiket">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Nama Lengkap" required  id="nama" name="nama">
          </div>
          <div class="input-box">
            <span class="details">Destination</span>
            <select class="form-select text-dark" type="text" name="id_perjalanan" id="id_perjalanan">
                <?php foreach ($perjalanan as $prjl) : ?>
                    <option value="<?= $prjl['id_perjalanan'] ?>"><?=  $prjl['kota_awal'],"  -  ",$prjl['kota_akhir']?></option>
                <?php endforeach; ?>
            </select>

          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Masukkan Email" required id="email" name="email">
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Masukkan Nomor HP" required name="nomor_hp" id="nomor_hp">
          </div>
          <div class="input-box">
            <span class="details">Passenger</span>
            <input type="text" placeholder="Masukkan Jumlah Penumpang" required name="penumpang" id="penumpang">
          </div>
          <div class="input-box">
            <span class="details">Agen Travel</span>
            <select class="form-select text-dark" type="text" name="id_bus" id="id_bus">
                <?php foreach ($bus as $bus) : ?>
                    <option value="<?= $bus['id_bus'] ?>"><?=  $bus['nama_bus']?></option>
                <?php endforeach; ?>
            </select>
          </div>


        </div>
        <div class="gender-details">
          <input type="radio" name="tipe_bus" id="dot-1">
          <input type="radio" name="tipe_bus" id="dot-3">
          <input type="radio" name="tipe_bus" id="dot-2">
          <span class="gender-title">Tipe Bus</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Ekonomi</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Eksklusif</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">VIP</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Pesan Tiket">
        </div>
      </form>
    </div>
  </div>

</body>

</html>