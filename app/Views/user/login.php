<?php
// session_start();
// if(isset($_SESSION['login'])){
//   header('Location: index.php');
//   exit;
// }
?>
<?= $this -> extend('template/header2')?>
<?= $this-> section('content')?>

    <section id="hero1" class="d-flex align-items-center">
        <div class="col-lg-6 order-3 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/Arsha/assets/img/provlampung.png" class="img-fluid animated" alt="">
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
                   <div>
                    <a href="ViewRegister"> Belum Punya akun? Daftar</a>
                   </div>
               </form>
           </div>
       </div>
    </section>
  </body>

</html>
<?= $this -> endSection() ?>
