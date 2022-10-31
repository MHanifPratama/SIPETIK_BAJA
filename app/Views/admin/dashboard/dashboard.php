<?= $this -> extend('template/headerAdmin')?>
<?= $this-> section('contentAdmin')?>

<style>
    body{
    margin-top:20px;
    background:#FAFAFA;
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
      <h1>Selamat Datang <?=$_SESSION['username']?></h1>
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
                    <h2 class="text-right"><i class="bi bi-person f-left m-3"></i><span><?=$supir?></span></h2>
                    <!-- <p class="m-b-0">Completed Orders<span class="f-right"></span></p> -->
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total Rute</h6>
                    <h2 class="text-right"><i class="bi bi-sign-turn-right f-left m-3"></i><span><?=$perjalanan?></span></h2>
                    <!-- <p class="m-b-0">Completed Orders<span class="f-right"></span></p> -->
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Staff Keuangan</h6>
                    <h2 class="text-right"><i class="bi bi-sign-turn-right f-left m-3"></i><span><?=$perjalanan?></span></h2>
                    <!-- <p class="m-b-0">Completed Orders<span class="f-right"></span></p> -->
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total Armada</h6>
                    <h2 class="text-right"><i class="bi bi-sign-turn-right f-left m-3"></i><span><?=$armada?></span></h2>
                    <!-- <p class="m-b-0">Completed Orders<span class="f-right"></span></p> -->
                </div>
            </div>
        </div>
      </div> 
	</div>
	</div>
</div>
<?= $this -> endSection() ?>