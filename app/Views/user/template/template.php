<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="<?php echo $Meta; ?>" name="description">
  <meta content="" name="keywords">
  <?php foreach ($profil as $perusahaan) : ?>
    <link rel="shortcut icon" href="<?= base_url('asset-user/images/') ?><?= $perusahaan->favicon_website ?>">
  <?php endforeach; ?>

  <!-- Favicons -->
  <link href="<?= base_url('asset-user') ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/fonts/icomoon/style.css">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('asset-user') ?>/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url('asset-user') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('asset-user') ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('asset-user') ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/jquery-ui.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/aos.css">
  <link href="<?= base_url('asset-user') ?>/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/style.css">

  <title>
    <?php echo $Title; ?> | <?php foreach ($profil as $descper) : ?><?= $descper->nama_perusahaan; ?><?php endforeach; ?>
  </title>

  <!-- =======================================================
  * Template Name: EstateAgency
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- Spinner Start -->
  <div id="preloader" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <img src="/asset-user/images/loading.gif" alt="Loading" class="gif-loader" style="max-width: 100px; max-height: 100px;">
  </div>
  <!-- Spinner End -->

  <?= $this->include('user/layout/nav'); ?>

  <!-- render halaman konten -->
  <?= $this->renderSection('content'); ?>

  <!-- icon wa -->
  <?php foreach ($profil as $iconwa) : ?>
    <a class="whats-app" href="<?= $iconwa->link_whatsapp ?>" target="_blank" style="position: fixed; bottom: 30px; right: 10px; z-index: 1000;">
      <img data-src="<?= base_url('asset-user/images/iconwa.png'); ?>" alt="WhatsApp" class="my-float lazyload" style="width: 80px; height: auto; padding: 10px; transition: background-color 0.3s ease-in-out;">
    </a>
  <?php endforeach; ?>


  <?= $this->include('user/layout/footer');  ?>

  <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <!-- Vendor JS Files -->
  <script src="<?= base_url('asset-user') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery-ui.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/popper.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/bootstrap.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/owl.carousel.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery.stellar.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery.countdown.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/bootstrap-datepicker.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery.easing.1.3.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/aos.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery.fancybox.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery.sticky.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery.mb.YTPlayer.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/lazysizes.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('asset-user') ?>/js/main.js"></script>

  <script>
    // Ambil URL halaman saat ini
    var currentURL = window.location.href;

    // Dapatkan daftar semua elemen <a> di dalam navbar
    var navLinks = document.querySelectorAll(".navbar-nav .nav-link");

    // Loop melalui setiap tautan navbar untuk mencocokkan URL saat ini
    for (var i = 0; i < navLinks.length; i++) {
      var navLink = navLinks[i];

      // Jika URL pada tautan navbar adalah substring dari URL halaman saat ini
      if (currentURL.includes(navLink.href)) {
        // Tambahkan kelas "active" ke tag <a> terkait
        navLink.classList.add("active");
      }
    }
  </script>

</body>

</html>