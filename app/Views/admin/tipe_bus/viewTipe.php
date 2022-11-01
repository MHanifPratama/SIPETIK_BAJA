<?= $this -> extend('template/headerAdmin')?>
<?= $this-> section('contentAdmin')?>

<main id="main" class="main">
    <div class="pagetitle mb-5">
      <h1>Tipe Bus</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Tipe Bus</li>
        </ol>
      </nav>
    </div>
    <section class="section dashboard">
        <a href="/viewTambahTipeBus" class="btn btn-outline-primary"> Tambah TipeBus </a>

        <div class="row p-3">
            <table class="table table-dark" >
                <thead>
                    <th scope="col">No</th>
                    <th scope="col">Tipe Bus</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </thead>
                <tbody>
                    <?php ?>
                    <?php foreach ($tipe_bus as $tipe) : ?>
                    <tr>
                        <td><?= $tipe['id_tipe']?></td><br>
                        <td><?= $tipe['tipe']?></td><br>
                        <td><?= $tipe['harga']?></td><br>
                        <td>
                            <div class="d-flex">
                                <div class="box">
                                    <a class="btn btn-warning bi bi-pencil-fill mr-3 ml-3" href="/editTipe/<?= $tipe['id_tipe'] ?>"></a>
                                </div>
                                <div class="box">
                                    <form action="/hapusTipe/<?= $tipe['id_tipe'] ?>" method="post">
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <button type="submit" class="btn btn-danger bi bi-trash3-fill mr-3 ml-3" onclick="return confirm('Apakah Ingin Menghapus Data ini ?')"></button>
                                    </form>
                                </div>
                            </div>
                        </td>                   
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</main>
</html>
<?= $this -> endSection() ?>

