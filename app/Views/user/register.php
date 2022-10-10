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
        <!-- <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
              <form action="/Register_User" method="post"> -->
                <!-- Email input -->
                <!-- <div class="form-outline mb-4">
                  <input type="email" name="email" id="email" class="form-control form-control-lg" />
                  <label class="form-label" for="email">Email address</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="text" name ="username" id="username" class="form-control form-control-lg" />
                    <label class="form-label" for="username">Username</label>
                  </div> -->
      
                <!-- Password input -->
                <!-- <div class="form-outline mb-4">
                  <input type="password" name ="password" id="password" class="form-control form-control-lg" />
                  <label class="form-label"  for="password">Password</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="password" name ="confpassword" id="confpassword" class="form-control form-control-lg" />
                    <label class="form-label"  for="confpassword">Confirm Password</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="text" name ="nama_pelanggan" id="nama_pelanggan" class="form-control form-control-lg" />
                    <label class="form-label" for="nama_pelanggan">Name</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="text" name ="nomor_hp_pelanggan" id="nomor_hp_pelanggan" class="form-control form-control-lg" />
                    <label class="form-label" for="nomor_hp_pelanggan">Nomor HP</label>
                  </div>
                <div class="d-flex justify-content-around align-items-center mb-4"> -->
                  <!-- Checkbox -->
                  <!-- <a href="login.php">Sudah Punya Akun?</a>
                </div> -->
                <!-- Submit button -->
                <!-- <button type="submit" name="register" class="btn btn-primary btn-lg btn-block">Sign in</button>
              </form>
            </div>
          </div>
        </div> -->
      </section>

<?= $this -> endSection() ?>