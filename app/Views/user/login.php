<?php
// session_start();
// if(isset($_SESSION['login'])){
//   header('Location: index.php');
//   exit;
// }
?>
<?= $this -> extend('template/header')?>
<?= $this-> section('content')?>

    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
              
            <form action="login_user" method="post">
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input name="email" type="email" id="email" class="form-control form-control-lg" />
                  <label class="form-label" for="email">Email address</label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input name="password" type="password" id="password" class="form-control form-control-lg" />
                  <label class="form-label" for="password">Password</label>
                </div>
      
                <div class="d-flex justify-content-around align-items-center mb-4">
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value=""id="form1Example3" checked />
                    <label class="form-check-label" for="form1Example3"> Remember me </label>
                  </div>
                  <a href="#!">Forgot password?</a>
                  <a href="reg.php">Belum Punya Akun?</a>
                </div>
                <!-- Submit button -->
                <button name="login" id="login" type="login" class="btn btn-primary btn-lg btn-block">Sign in</button>
              </form>
            </div>
          </div>
        </div>
      </section>
</body>


    <section id="hero" class="d-flex align-items-center">
       <div class="imgBx">
           <img src="assets/Arsha/assets/img/bus.jpg" alt="image login">
       </div>
       
       <div class="contentBx">
           <div class="formBx">
               
               <h2>Login</h2>
               <?php 
                if(session() -> getFlashdata('msg')) : ?>
                <div class ="alert alert-danger"> <?=session() -> getFlashdata('msg')?> </div>
                <?php endif; ?>
               <form action="/login_user" METHOD="post">

                   <div class="inputBx">
                       <span>Username</span>
                       <label>
                           <input type="text" name="username" required autocomplete="off">
                       </label>
                   </div>
                   <div class="inputBx">
                       <span>Password</span>
                       <label>
                           <input type="password" name="password" required autocomplete="off">
                       </label>
                   </div>
                   <div class="inputBx">
                       <input type="submit" value="Sign In" name="login">
                   </div>
               </form>
           </div>
       </div>
    </section>
  </body>




</html>
<?= $this -> endSection() ?>
Footer
© 2022 GitHub, Inc.
Footer navigation
Terms
Privacy