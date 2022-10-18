
<?= $this -> extend('template/headerAdmin')?>
<?= $this-> section('contentAdmin')?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambah Supir</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Supir / Tambah Supir</li>
        </ol>
      </nav>
    </div>

  <form method="post" action="\simpanDataSupir">
    <div class="form-row">
      <div class="form-group col-md-6 mb-3">
          <label for="nama_supir">Nama Supir</label>
          <input type="text" class="form-control" id="nama_supir" name="nama_supir">
      </div>
      <div class="form-group col-md-6 mb-3">
          <label for="nomor_hp_supir">No Hp Supir</label>
          <input type="text" class="form-control" id="nomor_hp_supir" name="nomor_hp_supir">
      </div>
    </div>
    
    <button type="submit" class="btn btn-outline-primary">Submit</button>
  </form>
</main>

</html>
<?= $this -> endSection() ?>

