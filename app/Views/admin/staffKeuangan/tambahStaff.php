
<?= $this -> extend('template/headerAdmin')?>
<?= $this-> section('contentAdmin')?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambah Staff Keuangan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Staff Keuangan / Tambah Staff Keuangan</li>
        </ol>
      </nav>
    </div>

  <form method="post" action="\simpanDataStaff">
    <div class="form-row">

        <div class="form-group col-md-6 mb-3">
          <label for="email"> Email </label>
          <input type="text" class="form-control" id="email" name="email">
        </div>

        <div class="form-group col-md-6 mb-3">
            <label for="nama_staff"> Nama Staff </label>
            <input type="text" class="form-control" id="nama_staff" name="nama_staff">
        </div>

        <div class="form-group col-md-6 mb-3">
            <label for="password"> Password </label>
            <input type="text" class="form-control" id="password" name="password">
        </div>

        <div class="form-group col-md-6 mb-3">
            <label for="no_hp"> No Hp </label>
            <input type="text" class="form-control" id="no_hp" name="no_hp">
        </div>

    </div>
    
    <button type="submit" class="btn btn-outline-primary">Submit</button>
  </form>
</main>

</html>
<?= $this -> endSection() ?>

