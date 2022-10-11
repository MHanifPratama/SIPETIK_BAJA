<?php
// session_start();
// if(isset($_SESSION['login'])){
//   header('Location: index.php');
//   exit;
// }
?>
<?= $this -> extend('template/header')?>
<?= $this-> section('content')?>


    <section>
        
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