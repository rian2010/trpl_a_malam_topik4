<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MONOCORE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
        <h1 class="text-light"><a href="index.html">Monocore</a></h1>
        <div class="social-links mt-3 text-center">
      </div>
    </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#pengajuan" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Pengajuan</span></a></li>
          <li><a href="#info" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Info Ruangan</span></a></li>
          <li><a href="#status" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Status</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Laporan Kerusakan</span></a></li>
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

    <!-- ======= pengajuan Section ======= -->
    <section id="abo" class="about">

    </section><!-- End pengajuan Section -->


<!-- Pengajuan Section -->
<section id="pengajuan" class="resume">
  <div class="container">
    <div class="section-title">
    <h2>Pengajuan Ruangan</h2>
    </div>
      <div class="row" data-aos="fade-in">
      <?php require("form_pengajuan.php")?>
      </div>
  </div>
</section>
<!-- End Pengajuan Section -->

<!--  Info Ruangan Section -->
<section id="info" class="resume">
    <div class="container">
    <div class="section-title">
    <h2>Info Ruangan</h2>
    </div>
      <div class="row" data-aos="fade-in">
      <?php require("data_ruang.php")?>
      </div>
  </div>
</section>
<!-- end info ruangan Section -->

<!-- Status Section  -->
<section id="status" class="services">
  <div class="container">
    <div class="section-title">
    <h2>Status</h2>
    </div>
      <div class="row" data-aos="fade-in">
      <?php require("status_pengajuan.php")?>
      </div>
  </div>
</section>
<!-- End Status Section -->

<!-- Laporan Section  -->
<section id="contact" class="contact" style="height: 50rem;">
  <div class="container">
    <div class="section-title">
    <h2>Laporan</h2>
    </div>
      <div class="row" data-aos="fade-in">
      <?php require("saran.php")?>
      </div>
  </div>
</section>
<!-- End Laporan Section -->
</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      
      <div class="credits">
      
        Login Sebagai <a href="login.php">Admin</a>
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

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>