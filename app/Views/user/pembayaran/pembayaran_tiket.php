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
    

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/Arsha/assets/css/homepage.css">
    <title>SIPETIK</title>
    
</head>
<body>
    
<div class="row justify-content-center">
    
    <div class="col-md-5">
    <div class="alert alert-danger mt-3" role="alert">
        <h3 class="text-center">PERINGATAN!</h3>
        <p class="text-center">Diharapkan untuk tidak merefresh halaman supaya tidak terjadi kegagalan dalam proses transaksi.</p>
        </div>
        <div class="card">

            <div class ="card-body" >
            <h3 class = "text-success text-center">SELAMAT KAMU BERHASIL MELAKUKAN PEMESANAN!</h3>
            <h5 class ="text-info text-center" >Silahkan Lakukan Pembayaran Sesuai Detail Berikut</h5>

            <div class="row">
                <div class="col-md-5">
                    <div class="card" style="width: 18rem;" >
                        <img class="card-img-top" src="assets/Arsha/assets/img/team/GOPAY.png" alt="gopay">
                        <div class="card-body">
                            <p class="card-text">082202128373 a.n SIPETIK BAJA</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 ml-1">
                    <div class="card" style="width: 18rem;" >
                        <img class="card-img-top" src="assets/Arsha/assets/img/team/DANA.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">082202128373 a.n SIPETIK BAJA</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 mt-1">
                    <div class="card" style="width: 18rem;" >
                        <img class="card-img-top" src="assets/Arsha/assets/img/team/BNI.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">21224352 a.n SIPETIK BAJA</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 ml-1">
                    <div class="card" style="width: 18rem;" >
                        <img class="card-img-top" src="assets/Arsha/assets/img/team/MANDIRI.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">12324523 a.n SIPETIK BAJA</p>
                        </div>
                    </div>
                </div>

            </div>


            <h6>Total Pembayaran yang harus dibayar</h6>
            <h4><?= session()->getFlashdata('harga') ?></h4>

            <hr>
            <h6>Kode Pembayaran</h6>
            <h4><?= session()->getFlashdata('kode') ?></h4>

            <hr><br><br>
            <p class="text-danger small text-center">*Jika Sudah Melakukan Pembayaran Silahkan Konfirmasi Pembayaran Dengan Klik Link <a href="">Konfirmasi Pembayaran</a></p>

            </div>
        </div>
    </div>
</div>


</body>