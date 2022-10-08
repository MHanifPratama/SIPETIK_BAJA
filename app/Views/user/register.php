<?= $this -> extend('template/header')?>
<?= $this-> section('content')?>

<section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
              <form action="/Register_User" method="post">
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" name="email" id="email" class="form-control form-control-lg" />
                  <label class="form-label" for="email">Email address</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="text" name ="username" id="username" class="form-control form-control-lg" />
                    <label class="form-label" for="username">Username</label>
                  </div>
      
                <!-- Password input -->
                <div class="form-outline mb-4">
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
                <div class="d-flex justify-content-around align-items-center mb-4">
                  <!-- Checkbox -->
                  <a href="login.php">Sudah Punya Akun?</a>
                </div>
                <!-- Submit button -->
                <button type="submit" name="register" class="btn btn-primary btn-lg btn-block">Sign in</button>
              </form>
            </div>
          </div>
        </div>
      </section>

      <?= $this -> endSection() ?>