<?= $this -> extend('template/header2')?>
<?= $this-> section('content')?>

<section id="hero3" class="d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 d-flex flex-column justify-content-center pt- pt-lg-0 order-4 order-lg-4" data-aos="fade-up" data-aos-delay="200">
				<div class="contentBx">
					<div class="formBx">
						<h2 class="card-header"><?=lang('Auth.loginTitle')?></h2>
						<div class="card-body">

							<?= view('Myth\Auth\Views\_message_block') ?>

							<form action="<?= url_to('login') ?>" method="post">
								<?= csrf_field() ?>
								<div class="inputBx">
									<?php if ($config->validFields === ['email']): ?>
										<div class="form-group">
											<label for="login"><?=lang('Auth.email')?></label>
											<input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
												name="login"  placeholder="<?=lang('Auth.email')?>">
											<div class="invalid-feedback">
												<?= session('errors.login') ?>
											</div>
										</div>
									<?php else: ?>
										<div class="form-group">
											<label for="login"><?=lang('Auth.emailOrUsername')?></label>
											<input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
												name="login">
											<div class="invalid-feedback">
												<?= session('errors.login') ?>
											</div>
										</div>
									<?php endif; ?>
								</div>
								
								<div class="inputBx">
										<div class="form-group">
											<label for="password"><?=lang('Auth.password')?></label>
											<input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>">
											<div class="invalid-feedback">
												<?= session('errors.password') ?>
											</div>
										</div>

									<?php if ($config->allowRemembering): ?>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
												<?=lang('Auth.rememberMe')?>
											</label>
										</div>
									<?php endif; ?>
								</div>

								<div class="inputBx">
									<input type="submit">
								</div>
							</form>

							<?php if ($config->allowRegistration) : ?>
								<p><a class="ngelink" href="<?= url_to('register') ?>"><?=lang('Auth.needAnAccount')?></a></p>
							<?php endif; ?>
							<?php if ($config->activeResetter): ?>
								<p><a class="ngelink" href="<?= url_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a></p>
							<?php endif; ?>
						</div>
					</div>

					
				</div>
			</div>
			<div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          		<img src="assets/Arsha/assets/img/provlampung.png" class="img-fluid animated" alt="">
        	</div>
		</div>
	</div>
</section>

<?= $this->endSection() ?>
