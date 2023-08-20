<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php foreach ($identitas as $idx) {
            echo $idx->judul_website;
          } ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="<?php echo base_url('assets2/') ?>assets/img/favicon.png" rel="icon"> # -->
  <link href="<?php echo base_url('assets2/') ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets2/') ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets2/') ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url('assets2/') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets2/') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url('assets2/') ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets2/') ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets2/') ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url('assets2/') ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets2/') ?>assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="<?= base_url() ?>"><span><?php foreach ($identitas as $idx) {
                                                            echo $idx->judul_website;
                                                          } ?></span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="<?= base_url() ?>">Beranda</a></li>

          <li class="dropdown"><a href="#"><span>Profil</span><i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url('user/sejarah') ?>">Sejarah Desa</a></li>
              <li><a href="<?= base_url('user/visi') ?>">Visi & Misi Desa</a></li>
              <li><a href="<?= base_url('user/struktur') ?>">Struktur Desa</a></li>
            </ul>
          </li>

          <li><a href="<?= base_url('user/fasilitas') ?>">Fasilitas</a></li>
          <li><a href="<?= base_url('user/produk') ?>">Produk</a></li>
          <li class="dropdown"><a href="#"><span>Layanan</span><i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url('user/informasi') ?>">Informasi Surat</a></li>
            </ul>
          </li>
          <li><a href="<?= base_url('user/kontak') ?>">Kontak</a></li>

          <?php if (!$this->session->userdata('email')) : ?>
            <li><a href="<?php echo base_url('login'); ?>">Login</a></li>
          <?php else : ?>
            <li><a href="<?= base_url('/user/surat') ?>">Surat</a></li>
            <li><a href="<?= base_url('/login/logout') ?>">Keluar</a></li>
          <?php endif; ?>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->