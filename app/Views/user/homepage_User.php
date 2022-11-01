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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/Arsha/assets/css/homepage.css">
    <title>SIPETIK</title>
</head>
<body>
<div class="img"></div>
  <div class="center">
    <div class="title">Sistem Pemesanan Tiket</div>
    <div class="sub_title">Bus Antar Kota</div>
    <div class="btns">
      <button id="show">Book Now</button>
         </div>
        <div class="popup">
        <div class="btn">&times;</div>
        <div class="container">
        <div class="title1">Pesan Tiket</div>
        <div class="content">
          <form action="/prosesTiket" method="post">
            <div class="user-details">
              <div class="input-box">
                <span class="details">Full Name</span>
                <input type="text" placeholder="Nama Lengkap" required  id="nama" name="nama">
              </div>
              <div class="input-box">
                <span class="details">Destination</span>
                <select class="form-select text-dark" type="text" name="id_perjalanan" id="id_perjalanan">
                </select>
    
              </div>
              <div class="input-box">
                <span class="details">Email</span>
                <input type="text" placeholder="Masukkan Email" required id="email" name="email">
              </div>
              <div class="input-box">
                <span class="details">Phone Number</span>
                <input type="text" placeholder="Masukkan Nomor HP" required name="no_hp" id="no_hp">
              </div>
              <div class="input-box">
                <span class="details">Passenger</span>
                <input type="text" placeholder="Masukkan Jumlah Penumpang" required name="penumpang" id="penumpang">
              </div>
              <div class="input-box">
                <span class="details">Agen Travel</span>
                <select class="form-select text-dark" type="text" name="id_bus" id="id_bus">
                </select>
              </div>
    
    
            </div>
            <div class="input-box">
            <span class="details">Tipe Bus</span>
              <select class="form-select text-dark" type="text" name="id_tipe" id="id_tipe">
              </select>
              
            </div>
            <div class="button">
              <input type="submit" value="Pesan Tiket">
            </div>
          </form>
          
        </div>
      </div>
    </div>
    
  </div>
    </div>
    <div class="tabelll">
        <button id="show_1">Schedule</button>
        </div>
        <div class="popup_1">
            <div class="btn_1">&times;</div>
            <main class="py-4">
    
                <div class="container_2">
        
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                Example
                            </div>
                            <div class="card-body">
        
                                <div style="margin-bottom: 20px;">
        
                                    <input type="text" id="filter0" placeholder="Filter By Name">
                                    <input type="text" id="filter1" placeholder="Filter By Email">
                                    <input type="text" id="filter2" placeholder="Filter By Status">
        
                                </div>
        
                                <table id="filter" class="table">
                                    <thead>
                                        <tr>
                                            <th>Id Bus</th>
                                            <th>Jadwal Keberangkatan</th>
                                            <th>Tipe Bus</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        <tr>
                                            <td>02</td>
                                            <td>12.00 WIB</td>
                                            <td>VVIP</td>
                                            <td>20000</td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>11.00 WIB</td>
                                            <td>VVIP</td>
                                            <td>20000</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                        
                            </div>
                        </div>    
                        </div>
                    </div>
        
        
                </div>    
        
            </main>
  </div>
  
  <script src="TableFilter.min.js" defer></script>
  <script src="popup.js"></script>
  <script src="popup_1.js"></script>
</body>