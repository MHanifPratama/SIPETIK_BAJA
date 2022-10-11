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
                <th scope="col">Harga</th>
            </tr>
        </thead>
            <tbody>
                <?php ?>
                <?php foreach ($bus as $mhs) : ?>
                <tr>
                    <td><?= $mhs['id_bus']?></td>
                    <td><?= $mhs['nama_bus']?></td>
                    <td><?= $mhs['tipe']?></td>
                    <td><?= $mhs['kota_awal']?></td>
                    <td><?= $mhs['kota_akhir']?></td>
                    <td><?= $mhs['harga'] * $mhs['total_km']?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
</html>


<?= $this -> endSection() ?>