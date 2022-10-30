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
    border-radius: 5px;
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
    <div class="pagetitle">
      <h1>Selamat Datang <?=$_SESSION['username']?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Perjalanan</li>
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
                    <h6 class="m-b-20">Total Supir</h6>
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
	</div>
</div>


    </div>
 <!-- Customers Card -->
 <div class="col-xxl-4 col-xl-12">

    <div class="card info-card customers-card">

    <div class="filter">
        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        <li class="dropdown-header text-start">
            <h6>Filter</h6>
        </li>

        <li><a class="dropdown-item" href="#">Today</a></li>
        <li><a class="dropdown-item" href="#">This Month</a></li>
        <li><a class="dropdown-item" href="#">This Year</a></li>
        </ul>
    </div>

    <div class="card-body">
        <h5 class="card-title">Customers <span>| This Year</span></h5>

        <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
            <i class="bi bi-people"></i>
        </div>
        <div class="ps-3">
            <h6>1244</h6>
            <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

<<<<<<< Updated upstream
        </div>
=======
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total Armada Bus</h6>
                    <h2 class="text-right"><i class="bi bi-sign-turn-right f-left m-3"></i><span><?=$armada?></span></h2>
                    <!-- <p class="m-b-0">Completed Orders<span class="f-right"></span></p> -->
                </div>
            </div>
>>>>>>> Stashed changes
        </div>

    </div>
    </div>

</div><!-- End Customers Card -->


<?= $this -> endSection() ?>