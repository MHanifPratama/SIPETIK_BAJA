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
            <table >
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
                        <form action="/hapusTipe/<?= $tipe['id_tipe'] ?>" method="post">
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="submit" class="btn btn-dark btn-sm ff-gantari">Hapus</button>
                        </form>
                        </td>
                        <td>
                            <div>
                                <a href="/editTipe/<?= $tipe['id_tipe'] ?>">Edit</a>
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

