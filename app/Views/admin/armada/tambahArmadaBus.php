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

  <form method="post" action="\simpanDataBus">
    <div class="form-row">
      <div class="form-group col-md-6 mb-3">
          <label for="nama_bus">Nama Bus</label>
          <input type="text" class="form-control" id="nama_bus" name="nama_bus">
      </div>
      <div class="form-group col-md-6 mb-3">
      <select class="form-select text-dark" type="text" name="id_supir" id="id_supir">
            <?php foreach ($supir as $supir) : ?>
                <option value="<?= $supir['id_supir'] ?>"><?= $supir['nama_supir'] ?></option>
            <?php endforeach; ?>
        </select>
      </div>
      <div class="form-group col-md-6 mb-3">
      <select class="form-select text-dark" type="text" name="id_jadwal" id="id_jadwal">
            <?php foreach ($jadwal as $jadwal) : ?>
                <option value="<?= $jadwal['id_jadwal'] ?>"><?=  $jadwal['tanggal'] ,"   ", $jadwal['waktu_keberangkatan']?></option>
            <?php endforeach; ?>
        </select>
      </div>
      <div class="form-group col-md-6 mb-3">
      <select class="form-select text-dark" type="text" name="id_tipe" id="id_tipe">
            <?php foreach ($tipeBus as $tipe) : ?>
                <option value="<?= $tipe['id_tipe'] ?>"><?=  $tipe['tipe']?></option>
            <?php endforeach; ?>
        </select>
      </div>
      <div class="form-group col-md-6 mb-3">
      <select class="form-select text-dark" type="text" name="id_perjalanan" id="id_perjalanan">
            <?php foreach ($perjalanan as $prjl) : ?>
                <option value="<?= $prjl['id_perjalanan'] ?>"><?=  $prjl['kota_awal'],"  -  ",$prjl['kota_akhir']?></option>
            <?php endforeach; ?>
        </select>
      </div>
    </div>
    
    <button type="submit" class="btn btn-outline-primary">Submit</button>
  </form>
</main>

</html>
<?= $this -> endSection() ?>
