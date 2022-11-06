<?= $this -> extend('template/headerAdmin')?>
<?= $this-> section('contentAdmin')?>

<style>
    body{
    margin-top:20px;
    background:#FAFAFA;
    background-color: #ffffff;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1600 900'%3E%3Cdefs%3E%3ClinearGradient id='a' x1='0' x2='0' y1='1' y2='0' gradientTransform='rotate(50,0.5,0.5)'%3E%3Cstop offset='0' stop-color='%230FF'/%3E%3Cstop offset='1' stop-color='%23CF6'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' x1='0' x2='0' y1='0' y2='1' gradientTransform='rotate(114,0.5,0.5)'%3E%3Cstop offset='0' stop-color='%23F00'/%3E%3Cstop offset='1' stop-color='%23FC0'/%3E%3C/linearGradient%3E%3C/defs%3E%3Cg fill='%23FFF' fill-opacity='0' stroke-miterlimit='10'%3E%3Cg stroke='url(%23a)' stroke-width='3.3'%3E%3Cpath transform='translate(-115.85 19.2) rotate(10.05 1409 581) scale(1.0196209999999999)' d='M1409 581 1450.35 511 1490 581z'/%3E%3Ccircle stroke-width='1.1' transform='translate(-93.5 74) rotate(15.700000000000001 800 450) scale(1.024814)' cx='500' cy='100' r='40'/%3E%3Cpath transform='translate(45.8 -163.5) rotate(150.5 401 736) scale(1.024814)' d='M400.86 735.5h-83.73c0-23.12 18.74-41.87 41.87-41.87S400.86 712.38 400.86 735.5z'/%3E%3C/g%3E%3Cg stroke='url(%23b)' stroke-width='1'%3E%3Cpath transform='translate(444 -16.599999999999998) rotate(4.1499999999999995 150 345) scale(0.9512069999999998)' d='M149.8 345.2 118.4 389.8 149.8 434.4 181.2 389.8z'/%3E%3Crect stroke-width='2.2' transform='translate(-224.5 -191.5) rotate(172.8 1089 759)' x='1039' y='709' width='100' height='100'/%3E%3Cpath transform='translate(-371.2 116.8) rotate(28.8 1400 132) scale(0.935)' d='M1426.8 132.4 1405.7 168.8 1363.7 168.8 1342.7 132.4 1363.7 96 1405.7 96z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    background-attachment: fixed;
    background-size: cover;
}
.order-card {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg,#4099ff,#73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg,#2ed8b6,#59e0c5);
}

.bg-c-yellow {
    background: linear-gradient(45deg,#FFB64D,#ffcb80);
}

.bg-c-pink {
    background: linear-gradient(45deg,#FF5370,#ff869a);
}


.card {
    border-radius: 8px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.card .card-block {
    padding: 25px;
}

.order-card i {
    font-size: 26px;
}

.f-left {
    float: left;
}

.f-right {
    float: right;
}
</style>

<main id="main" class="main">
    <div class="pagetitle mb-5">
      <h1>Selamat Datang <?=$admin['username']?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
 <!-- Customers Card -->
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-2">Total Supir</h6>
                    <h2 class="text-right"><i class="bi bi-person m-3"></i><span><?=$supir?></span></h2>
                    <!-- <p class="m-b-0">Completed Orders<span class="f-right"></span></p> -->
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-2">Total Rute</h6>
                    <h2 class="text-right"><i class="bi bi-sign-turn-right  m-3"></i><span><?=$perjalanan?></span></h2>
                    <!-- <p class="m-b-0">Completed Orders<span class="f-right"></span></p> -->
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6 class="m-b-2">Staff Keuangan</h6>
                    <h2 class="text-right"><i class="bi bi-sign-turn-right m-3"></i><span><?=$staffKeuangan?></span></h2>
                    <!-- <p class="m-b-0">Completed Orders<span class="f-right"></span></p> -->
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-2">Total Armada</h6>
                    <h2 class="text-right"><i class="bi bi-sign-turn-right m-3"></i><span><?=$armada?></span></h2>
                    <!-- <p class="m-b-0">Completed Orders<span class="f-right"></span></p> -->
                </div>
            </div>
        </div>
      </div> 
	</div>
	</div>
</div>
<?= $this -> endSection() ?>