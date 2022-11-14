<?= $this -> extend('template/header2')?>
<?= $this-> section('content')?>

<section id="hero2" class="d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt- pt-lg-0 order-4 order-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="contentBx">
          <div class="formBx">
            <h2><?=lang('Auth.register')?></h2>
            <?= view('Myth\Auth\Views\_message_block') ?>

              <form action="<?= url_to('register') ?>" method="post">
                <?= csrf_field() ?>
                <div class="inputBx">
                  <span><?=lang('Auth.email')?></span>
                    <label>
                        <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                            name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>" required autocomplete="off">
                            <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                    </label>

                    <span><?=lang('Auth.username')?></span>

                    <label>
                        <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>" required autocomplete="off">
                    </label>
                </div>

                <div class="inputBx">
                    <span><?=lang('Auth.password')?></span>

                    <label>
                        <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" required autocomplete="off">
                    </label>
                </div>
                
                <div class="inputBx">
                    <span><?=lang('Auth.repeatPassword')?></span>

                    <label>
                        <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" required autocomplete="off">
                    </label>
                </div>
                <div class="inputBx">
                  <input type="submit" value="Sign Up" name="register">
                </div>

                <div>
                  <p><?=lang('Auth.alreadyRegistered')?> <a href="<?= url_to('login') ?>"><?=lang('Auth.signIn')?></a></p>
                </div>

              </form>
                    
          </div>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/Arsha/assets/img/provlampung.png" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>    
</section>

<?= $this -> endSection() ?>