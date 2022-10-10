<?= $this -> extend('template/header')?>
<?= $this-> section('content')?>

  <!-- ======= Login Register ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt- pt-lg-0 order-5 order-lg-5" data-aos="fade-up" data-aos-delay="200">
          <h1>Selamat Datang Petikers</h1>
          <h2>Sistem Informasi Penjualan Tiket Armada Bus Baja</h2>
          <h3>Bus Antar Daerah Provinsi Lampung</h3>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <!-- Pesan Ticket -->
            <a href="view_login" class="btn-get-started scrollto"> Pesan Tiket </a>
          </div>
        </div>
        <!-- Picture (mau diganti siger) -->
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/Arsha/assets/img/provlampung.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div>
            <p>
            SIPETIK BAJA merupakan sebuah sistem berbasis web yang digunakan
            untuk melakukan berbagai operasi seperti, pemesanan tiket, pembelian
            tiket, pemberi sumber informasi mengenai jadwal bus dan pemantauan
            transaksi pembelian tiket di armada Bus Baja
            </p>
            <ul>
              <p>Fitur - fitur yang dimiliki SIPETIK BAJA</p>
              <li><i class="ri-check-double-line"></i> Memesan tiket lebih mudah dan cepat</li>
              <li><i class="ri-check-double-line"></i> Tidak perlu khawatir tiket hilang, karena tiket tersimpan di akun milikmu</li>
              <li><i class="ri-check-double-line"></i> Anda bisa sesuaikan jadwal keberangkatan anda, karena anda bisa melihat rute serta jadwal keberangkatan</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

	<!-- ======= Schedule Section ======= -->
    <section id="schedule" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Schedule</h2>
          <p>Jadwal Armada Bus BAJA yang beroperasi bisa anda ketahui disini. Untuk Pemesanan Tiket bisa klik tombol pesan tiket yang ada di halaman Home</p>
        </div>
          <div class="d-flex align-items-center">
            <form action="\cariPerjalanan" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Asal</label>
                    <select type="text" class="form-control" name="asal" id="asal" required>
                    <?php foreach($bus as $mhs): ?>
                      <option value=<?=$mhs['kota_awal']?>><?=$mhs['kota_awal']?></option>
                  <?php endforeach; ?>
                  </select>
                  </div>
                <div class="form-group col-md-6">
                  <label for="name">Tujuan</label>
                  <select type="text" class="form-control" name="tujuan" id="tujuan" required>
                  <?php foreach($bus as $mhs): ?>
                      <option value=<?=$mhs['kota_akhir']?>><?=$mhs['kota_akhir']?></option>
                  <?php endforeach; ?>
                </select>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Tipe Bus</label>
                <select type="text" class="form-control" name="tipeBus" id="tipeBus" required>
                <?php foreach($bus as $mhs): ?>
                    <option value=<?=$mhs['id_tipe']?>><?=$mhs['tipe']?></option>
                <?php endforeach; ?>
                </select>
              </div>
              <div class="text-center"><button type="submit">Search Schedule</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

	 <!-- ======= Team Section ======= -->
	 <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Project ini dibuat dan disusun oleh Mahasiswa Ilmu Komputer Universitas Lampung 2020, dengan anggota sebagai berikut. </p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/Arsha/assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Irfan Saputra</h4>
                <span>Leader and Fullstack Developer</span>
                <div class="social">
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets/Arsha/assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>M Hanif Pratama</h4>
                <span>Backend</span>
                <div class="social">
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets/Arsha/assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Muhammad Mufid Sadzili</h4>
                <span>Frontend</span>
                <div class="social">
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/Arsha/assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Muhammad Ega Putra Anzani</h4>
                <span>Frontend</span>
                <div class="social">
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Team Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->
</html>

<?= $this -> endSection() ?>