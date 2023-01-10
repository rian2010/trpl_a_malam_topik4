<?php
include "session.php";
?>
<!--header("refresh:5");-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ADMIN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="stylesheet" href="font-awesome/font-awesome/css/all.min.css"/>

  <!-- Favicons -->
  <link href="assets/img/monocore.jpg" rel="icon">
  <link href="assets/img/monocore.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/monocore.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html"><?php echo $_SESSION['username']; ?></a></h1>
        <div class="social-links mt-3 text-center">
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#pengajuan" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Konfirmasi Pengajuan</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bxs-file-pdf"></i> <span>Cetak</span></a></li>
          <li><a href="#peminjam" class="nav-link scrollto"><i class='bx bxs-file' ></i> <span>Info Peminjam</span></a></li>
          <li><a href="#info" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Pembaruan Data Ruangan</span></a></li>
          <li><a href="#status" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Status</span></a></li>
          <li><a href="#kritik" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Laporan Kerusakan</span></a></li>
          <li><a href="logout.php" class="nav-link scrollto"><i class="bx bx-log-out"></i></i> <span>Logout</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Halo Selamat Datang</h1>
      <p>Di <span class="typed" data-typed-items="Monocore"></span></p>
    </div>
  </section><!-- End Hero -->


  <main id="main">

    <section id="pengajuan" class="resume">
      <div class="container">
        <div class="section-title">
        <h2>Konfirmasi Pengajuan</h2>
        </div>
          <div class="row" data-aos="fade-in">
          <?php require("cobaenum.php")?>      </div>
      </div>
    </section>
          <!-- End Resume Section -->

          <!-- ======= pengajuan Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-in">
        <div class="section-title">
        <h2>Cetak Pengajuan</h2>
      </div>
      <?php require("cetak_surat_persetujuan.php")?>      </div>
    </div>
        </section><!-- End pengajuan Section -->

    <!-- ======= peminjam Section ======= -->
    <section id="peminjam" class="about">
        <div class="container" data-aos="fade-in">
        <div class="section-title">
        <h2>Informasi Peminjam</h2>
        </div>
        <?php require("informasi_peminjam.php")?>      </div>

        </div>
        </section><!-- End peminjam Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="info" class="resume">
        <div class="container">
        <div class="section-title">
        <h2>Pembaruan Data Ruangan</h2>
        </div>
          <?php require("coba_ruang.php")?>
      </div>
    </section>
        <!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->
      <section id="status" class="services">
      <div class="container">
        <div class="section-title">
        <h2>Status</h2>
        </div>
          <div class="row" data-aos="fade-in">
          <?php require("status_pengajuan_admin.php")?>
          </div>
      </div>
    </section>
        <!-- ======= Contact Section ======= -->
        <section id="kritik" class="resume">
        <div class="overflow-auto">
      <div class="container">
        <div class="section-title">
        <h2>Laporan </h2>
        </div>
          <div class="row" data-aos="fade-in">
          <?php require("saran_admin.php")?>
          </div>
      </div>
    </div>
    </section>
      <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      
      <div class="credits">

      
        Designed by <a>MONOCORE</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>