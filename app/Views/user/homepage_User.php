
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
          <form action="/menuPembayaran" method="post">
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

                <span class="details">Kota Awal</span>
                <input type="text" placeholder="Masukkan Email" readonly  required id="" name="" value ="<?= $bus['kota_awal']?>">
              </div>
              <div class="input-box">
                <span class="details">Kota Tujuan</span>
                <input type="text" placeholder="Masukkan Email" readonly  required id="" name="" value ="<?= $bus['kota_akhir']?>">
              </div>
              <div class="input-box">
                <span class="details">Harga</span>
                <input type="text" placeholder="Masukkan Email" readonly  required id="total_harga" name="total_harga" value ="<?= $bus['total_km'] * $bus['harga'] ?>">
              </div>
              <div class="input-box">

                <span class="details">Nama Bus</span>

                <input type="text" placeholder="Masukkan Email" readonly  required id="" name="" value ="<?= $bus['nama_bus']?>">
              </div>
              <div class="input-box">
                <input type="text" placeholder="Id Bus" hidden  required id="harga" name="id_bus" value ="<?= $bus['id_bus']?>">

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

                <span class="details">Nama Bus</span>

                <select class="form-select text-dark" type="text" name="id_bus" id="id_bus">
                <?php foreach ($bus as $bus) : ?>
                    <option value="<?= $bus['id_bus'] ?>"><?=  $bus['nama_bus']?></option>
                <?php endforeach; ?>
            </select>


                <span class="details">Tanggal Keberangkatan</span>
                <input type="text" placeholder="Tanggal" readonly  required id="" name="" value ="<?= $bus['tanggal']?>">

              </div>
            </div>

            <div class="input-box">

            <span class="details">Tipe Bus</span>

            <select class="form-select text-dark" type="text" name="id_tipe" id="id_tipe">
              <?php foreach ($tipeBus as $tipe) : ?>
                  <option value="<?= $tipe['id_tipe'] ?>"><?=  $tipe['tipe']?></option>
              <?php endforeach; ?>
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
  
  <script src="assets/Arsha/assets/js/TableFilter.min.js" defer></script>
  <script src="assets/Arsha/assets/js/popup.js"></script>
  <script src="assets/Arsha/assets/js/popup_1.js"></script>
</body>

