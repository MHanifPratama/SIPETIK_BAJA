<?= $this -> extend('template/headerAdmin')?>
<?= $this-> section('contentAdmin')?>

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Tambah Tipe Bus</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Tipe Bus / Tambah Tipe Bus</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
  <form method="post" action="\simpanDataTipe">
    <div class="form-row">
      <div class="form-group col-md-6 mb-3">
          <label for="tipe">Name Tipe</label>
          <input type="text" class="form-control" id="tipe" name="tipe">
      </div>
      <div class="form-group col-md-6 mb-3">
          <label for="harga">Harga</label>
          <input type="text" class="form-control" id="harga" name="harga">
      </div>
    </div>
    
    <button type="submit" class="btn btn-outline-primary">Submit</button>
  </form>

</main>

</html>
<?= $this -> endSection() ?>
