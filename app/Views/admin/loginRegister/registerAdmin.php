<?= $this -> extend('template/loginTemplate')?>
<?= $this-> section('LoginAdmin')?>
<?php if ($validation !== NULL) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $validation->listErrors(); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
<?php endif; ?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="/saveRegisterAdmin" method="post">
					<span class="login100-form-title p-b-26">
						Welcome
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email" id="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>
					<div class="wrap-input100 validate-input">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="text" name="username" id="username">
						<span class="focus-input100" data-placeholder="username"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" id="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="confpass" id="confpass">
						<span class="focus-input100" data-placeholder="confpass"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Register
							</button>
						</div>
					</div>

					<div class="text-center p-t-35">
						<span class="txt1">
							have account?
						</span>

						<a class="txt2" href="/loginAdmin">
							Sign In
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
<?= $this -> endSection() ?>
	