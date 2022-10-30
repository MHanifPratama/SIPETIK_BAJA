<?= $this -> extend('template/headerAdmin')?>
<?= $this-> section('contentAdmin')?>
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

        </div>
        </div>

    </div>
    </div>

</div><!-- End Customers Card -->


<?= $this -> endSection() ?>