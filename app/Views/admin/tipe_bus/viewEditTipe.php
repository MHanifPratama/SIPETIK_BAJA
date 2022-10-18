<?= $this -> extend('template/headerAdmin')?>
<?= $this-> section('contentAdmin')?>

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Supir</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Perjalanan / Edit Supir</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <form method="post" action="\updateTipe\<?=$tipe['id_tipe'] ?>">
        <div class="form-row">
            <div class="form-group col-md-6 mb-3">
                <label for="tipe">Tipe Bus</label>
                <input type="text" class="form-control" id="tipe" name="tipe" value="<?=$tipe['tipe'] ?>" >
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="harga">Harga/Km</label>
                <input type="text" class="form-control" id="harga" name="harga" value="<?=$tipe['harga'] ?>" >
            </div>
        </div>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>

</main>
<?= $this -> endSection() ?>