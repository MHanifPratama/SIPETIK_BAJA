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
    <form method="post" action="\updateSupir\<?= $Supir['id_supir'] ?>">
        <div class="form-row">
            <div class="form-group col-md-6 mb-3">
                <label for="nama_supir">Name Supir</label>
                <input type="text" class="form-control" id="nama_supir" name="nama_supir" value="<?=$Supir['nama_supir']?>" >
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="nomor_hp_supir">No Hp</label>
                <input type="text" class="form-control" id="nomor_hp_supir" name="nomor_hp_supir" value= "<?=$Supir['nomor_hp_supir']?>" >
            </div>
        </div>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>
</main>
<?= $this -> endSection() ?>