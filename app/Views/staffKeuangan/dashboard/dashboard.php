<?= $this->extend('template/temDashboard') ?>
  <?= $this->section('contentStaff') ?>

    <main id="main" class="main">
      <!--Page Title-->
      <div class="pagetitle mb-5">
        <h1>Selamat Datang [staf keuangan] </h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboardStaff">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </nav>
      </div>

      <!--Card-->
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
              <div class="card-block">
                <h6 class="m-b-2">Total Tiket</h6>
                <h8 class="text-right"><i class="bi bi-cash-stack m-3"></i>
                  <?= $totalTiket ?></i><span></span>
                </h8>
                <!-- <p class="m-b-0">Completed Orders<span class="f-right"></span></p> -->
              </div>
            </div>
          </div>

          <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
              <div class="card-block">
                <h6 class="m-b-2">Pemasukan</h6>
                <h8 class="text-right"><i class="bi bi-cash-stack m-3"></i>Rp <?= $totalPendapatan ?></i><span></span>
                </h8>
                <!-- <p class="m-b-0">Completed Orders<span class="f-right"></span></p> -->
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="pagetitle mb-5">
        <h1>Report Keuangan</h1>
      </div>

      <!-- Reports -->
      <div class="col-12">
        <div class="card">

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
            <h5 class="card-title">Reports <span>/Today</span></h5>

            <!-- Line Chart -->
            <div id="reportsChart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new ApexCharts(document.querySelector("#reportsChart"), {
                  series: [{
                    name: 'Sales',
                    data: [31, 40, 28, 51, 42, 82, 56],
                  }, {
                    name: 'Revenue',
                    data: [11, 32, 45, 32, 34, 52, 41]
                  }, {
                    name: 'Customers',
                    data: [15, 11, 32, 18, 9, 24, 11]
                  }],
                  chart: {
                    height: 350,
                    type: 'area',
                    toolbar: {
                      show: false
                    },
                  },
                  markers: {
                    size: 4
                  },
                  colors: ['#4154f1', '#2eca6a', '#ff771d'],
                  fill: {
                    type: "gradient",
                    gradient: {
                      shadeIntensity: 1,
                      opacityFrom: 0.3,
                      opacityTo: 0.4,
                      stops: [0, 90, 100]
                    }
                  },
                  dataLabels: {
                    enabled: false
                  },
                  stroke: {
                    curve: 'smooth',
                    width: 2
                  },
                  xaxis: {
                    type: 'datetime',
                    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                  },
                  tooltip: {
                    x: {
                      format: 'dd/MM/yy HH:mm'
                    },
                  }
                }).render();
              });
            </script>
            <!-- End Line Chart -->

          </div>

        </div>
      </div><!-- End Reports -->
    </main>

    </html>
    <?= $this->endSection() ?>