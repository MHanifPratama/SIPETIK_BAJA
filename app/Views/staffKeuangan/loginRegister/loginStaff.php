<?= $this->extend('template/loginStaff') ?>
	<?= $this->section('LoginStaff') ?>
	<section class="d-flex align-items-center">
			<div class="container-login100">
				<div class="wrap-login100">
					<form class="login100-form validate-form" action="/verifyLoginStaff" method="post">
						<span class="login100-form-title p-b-26">
							Welcome Staff
						</span>

						<div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
							<input class="input100" type="text" name="email">
							<span class="focus-input100" data-placeholder="Email"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Enter password">
							<span class="btn-show-pass">
								<i class="zmdi zmdi-eye"></i>
							</span>
							<input class="input100" type="password" name="pass">
							<span class="focus-input100" data-placeholder="Password"></span>
						</div>

						<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button class="login100-form-btn">
									Login
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>				

	</section>
<div id="dropDownSelect1"></div>
<?= $this->endSection() ?>