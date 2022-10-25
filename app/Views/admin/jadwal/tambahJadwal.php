<?= $this -> extend('template/headerAdmin')?>
<?= $this-> section('contentAdmin')?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambah Jadwal</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Jadwal / Tambah Jadwal</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <form method="post" action="\simpanDataJadwal">
        <div class="form-row">
            <div class="form-group col-md-6 mb-3">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal">
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="waktu_keberangkatan">Waktu Keberangkatan</label>
                <input type="time" class="form-control" id="waktu_keberangkatan" name="waktu_keberangkatan">
            </div>
        </div>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>
</main>

</html>
<?= $this -> endSection() ?>