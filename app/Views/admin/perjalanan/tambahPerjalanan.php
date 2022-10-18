
<?= $this -> extend('template/headerAdmin')?>
<?= $this-> section('contentAdmin')?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambah Perjalanan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Perjalanan / Tambah Perjalanan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <form method="post" action="\simpanDataPerjalanan">
        <div class="form-row">
            <div class="form-group col-md-6 mb-3">
                <label for="kota_awal">Kota Awal</label>
                <input type="text" class="form-control" id="kota_awal" name="kota_awal">
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="kota_akhir">Kota Akhir</label>
                <input type="text" class="form-control" id="kota_akhir" name="kota_akhir">
            </div>
        </div>
        <div class="form-group  col-md-6 mb-3">
            <label for="total_km">Jarak Tempuh </label>
            <input type="text" class="form-control" id="total_km" name="total_km">
        </div>

        <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>

</main>

</html>
<?= $this -> endSection() ?>
