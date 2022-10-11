<?= $this -> extend('template/header')?>
<?= $this-> section('content')?>

<section id="hero2" class="d-flex align-items-center">
  <div class="container">

    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt- pt-lg-0 order-4 order-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="contentBx">
              <div class="formBx">
                <h2>Register</h2>
                  <form action="/Register_User" METHOD="post">
                    <div class="inputBx">
                      <span>Email</span>
                        <label>
                          <input type="email" name="email" id="email" required autocomplete="off">
                        </label>
                      
                      <span>Username</span>
                        <label>
                          <input type="text" name="username" id="username" required autocomplete="off">
                        </label>
                    
                      <span>Password</span>
                        <label>
                          <input type="password" name="password" id="password" required autocomplete="off">
                        </label>

                      <span>Konfirmasi Password</span>
                        <label>
                          <input type="password" name="confpassword" id="confpassword" required autocomplete="off">
                        </label>

                      <span>Nama Pelanggan</span>
                        <label>
                          <input type="text" name="nama_pelanggan" id="nama_pelanggan" required autocomplete="off">
                        </label>

                      <span>No Hp</span>
                        <label>
                          <input type="text" name="nomor_hp_pelanggan" id="nomor_hp_pelanggan" required autocomplete="off">
                        </label>
                    </div>

                    <div class="inputBx">
                          <input type="submit" value="Sign Up" name="register">
                    </div>
                    <div>
                      <a href="view_login">Sudah Punya Akun?</a>
                    </div>
                </form>
              </div>
            </div>
          </div>

      <div class="col-lg-6 order-3 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="assets/Arsha/assets/img/provlampung.png" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>    
</section>

<?= $this -> endSection() ?>