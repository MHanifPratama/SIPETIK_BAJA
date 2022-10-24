<?= $this -> extend('template/header2')?>
<?= $this-> section('content')?>

<section id="hero1">
    <div class="container">
        <div class = "judul">
            <h2>Jadwal Perjalanan Armada Bus BAJA</h2>
        </div>
        <table class="table table-hover">
        <thead>
            <tr class="table-primary">
                <th scope="col">Bus</th>
                <th scope="col">Nama</th>
                <th scope="col">Tipe</th>
                <th scope="col">Asal</th>
                <th scope="col">Tujuan</th>

                <th scope="col">Tanggal</th>

                <th scope="col">Harga</th>
            </tr>
        </thead>
            <tbody>
                <?php ?>
                <?php foreach ($bus as $bus) : ?>
                <tr>
                    <td><?= $bus['id_bus']?></td>
                    <td><?= $bus['nama_bus']?></td>
                    <td><?= $bus['tipe']?></td>
                    <td><?= $bus['kota_awal']?></td>
                    <td><?= $bus['kota_akhir']?></td>

                    <td><?= $bus['tanggal']?></td>

                    <td><?= $bus['harga'] * $bus['total_km']?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
</html>


<?= $this -> endSection() ?>