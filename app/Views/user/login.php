<?php
// session_start();
// if(isset($_SESSION['login'])){
//   header('Location: index.php');
//   exit;
// }
?>
<?= $this -> extend('template/header')?>
<?= $this-> section('content')?>

<<<<<<< Updated upstream
    <section id="hero" class="d-flex align-items-center">
       <div class="imgBx">
           <img src="assets/Arsha/assets/img/bus.jpg" alt="image login">
       </div>
=======
    <section id="hero1" class="d-flex align-items-center">
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/Arsha/assets/img/provlampung.png" class="img-fluid animated" alt="">
        </div>
>>>>>>> Stashed changes
       
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
Footer
© 2022 GitHub, Inc.
Footer navigation
Terms
Privacy