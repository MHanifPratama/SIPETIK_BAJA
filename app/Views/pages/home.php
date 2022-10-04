<?= $this -> extend('template/header')?>
<?= $this-> section('content')?>
<section class="min-vh-100 d-flex align-items-center py-lg-0 py-5"id="tentang">
			<div class="container">
				<div class="row align-items-center g-5 g-lg-0">
					<div class="col-lg-5 order-lg-1 order-5">
						<img class="my-photo" height="400" src="image/sipetik.svg" alt="JohnDeacon"/>
					</div>
					<div class="col-lg-1 order-lg-2 order-2"></div>
					<div class="col-lg-6 order-lg-3 order-3">
						<h1 class="main-header">Selamat Datang <br/>
						</h1>
                        <h1 class=""><b>PELANGGAN</b></h1>
						<p class="my-4 text-content">
						</p>
						<a href="" class="btn btn-dark btn-lg">Buat Akun</a>
                        <a href="User" class="btn btn-dark btn-lg">Login</a>
					</div>
				</div>
			</div>
			</section>
<?= $this -> endSection() ?>