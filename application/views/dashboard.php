<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets') ?>/user/css/materialize.min.css" media="screen,projection" />

  <!-- my css -->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets') ?>/user/css/style.css">

  <style type="text/css">
    .parallax-container {
      height: 400px;
    }

    .active {
      background-color: #B8860B;
      color: #fff;
    }

    .clients h3 {
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);
    }

    .warna {
      background-color: #DAA520;
    }
  </style>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title><?php echo $title; ?></title>
</head>

<body id="home" class="scrollspy">


  <!-- navbar -->
  <div class="navbar-fixed">
    <nav class="warna">
      <div class="logo">
        <div class="container">
          <div class="nav-wrapper">
            <div class="text-darken-3">
              <?php foreach ($identitas as $idn) : ?>
                <div class="">
                <a href="" class="brand-logo" >
                  <?php echo $idn->judul_website; ?>
                </a>
              </div>
              <?php endforeach; ?>
              <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a class="list" href="#about">Identitas Desa</a></li>
                <li><a class="list" href="#fasilitas">Fasilitas</a></li>
                <li><a class="list" href="#sistem">Produk UMKM</a></li>
                <li><a class="list" href="#portfolio">Portofolio</a></li>
                <li><a class="list" href="#portfolio">Informasi Surat</a></li>
                <li><a class="list" href="#contact">Kontak</a></li>
                <?php if (!$this->session->userdata('email')) : ?>
                  <li><a href="<?php echo base_url('login'); ?>">Login</a></li>
                <?php else : ?>
                  <li><a class="list" href="#surat">Surat</a></li>
                  <li><a class="list" href="<?= base_url('/login/logout') ?>">Keluar</a></li>
                <?php endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <!-- sidenav mobile nav-->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="#about">Pemerintah Desa</a></li>
    <li><a href="#fasilitas">Fasilitas</a></li>
    <li><a href="#sistem">Sistem Kegiatan</a></li>
    <li><a href="#portfolio">Portofolio</a></li>
    <li><a href="#contact">Kontak</a></li>
    <?php if (!$this->session->userdata('email')) : ?>
      <li><a href="<?php echo base_url('login'); ?>">Login</a></li>
    <?php else : ?>
      <li><a class="list" href="<?php base_url('/surat') ?>">Surat</a></li>
      <li><a class="list" href="<?= base_url('/login/logout') ?>">Keluar</a></li>
    <?php endif; ?>
  </ul>




  <!-- ini adalah slider -->
  <div class="slider">
    <ul class="slides">
      
      <li>
        <img src="<?php echo base_url('assets') ?>/user/img/slider/desa.jpeg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Selamat Datang di Kantor Desa Pangulu Nagori Naga Soppa</h3>
          <h5 class="light grey-text text-lighten-3">Kabupaten Simalungun</h5>
        </div>
      </li>
    </ul>
  </div>


  <!-- about us -->
  <section id="about" class="about scrollspy">
    <div class="container">
      <div class="row">

        <h3 class="center"></h3>

        <?php foreach ($about as $abt) : ?>
          <div class="col m12">
            <h5>Sejarah</h5>
            <p align="justify">
              <?php echo $abt->about_us; ?>
            </p>
          </div>
      </div>
      <div class="row">
        <div class="col m6">
          <h5>Visi</h5>
          <p align="justify">
            <?php echo $abt->visi; ?>
          </p>

        </div>

        <div class="col m6">
          <h5>Misi</h5>
          <p align="justify">
            <?php echo $abt->misi; ?>
          </p>
        </div>
      <?php endforeach; ?>


      </div>
    </div>
  </section>


  <!-- services -->
  <section id="fasilitas" class="yellow services gray lighten-3 scrollspy">
    <div class="container">
      <div class="row">
        <div class="clients">
          <h3 class="light center grey-text white-text">Fasilitas Desa</h3>
        </div>
        <?php foreach ($fasilitas as $row) { ?>
          <div class="col m6 s12">
            <div class="card-panel center">
              <img src="<?php echo base_url('assets/user/img/portfolio/' . $row->gambar) ?>" class="responsive-img materialboxed" style="width:100%; height:250px; border-radius:20px">
              <h5><?php echo $row->judul; ?></h5>
              <p>

              </p>
            </div>
          </div>
        <?php } ?>
      </div>

  </section>

  <!-- sistem -->
  <section id="sistem" class="contact grey lighten-3 scrollspy">
    <div class="container">
      <h3 class="center light grey-text text-darken-3">Produk UMKM</h3>
      <div class="row">
        <?php foreach ($kegiatan as $row) { ?>
          <div class="col m4 s12">
            <div class="card-panel center">
              <img style="border-radius: 15px; width:100%; max-height:150px" src="<?php echo base_url('assets/user/img/' . $row->gambar) ?>" class="responsive-img materialboxed">
              <h5><?php echo $row->judul; ?></h5>
              <p>
                <?php echo $row->isi; ?>
              </p>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <!-- portfolio -->
  <section id="portfolio" class="yellow portfolio scrollspy">
    <div class="container">
      <h3 class="light center grey-text text-darken-3">Portfolio</h3>
      <div class="row">
        <div class="col m3 s12">
          <img src="<?php echo base_url('assets') ?>/user/img/portfolio/Masjid Al-Yaqin.png" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="<?php echo base_url('assets') ?>/user/img/portfolio/2.jpeg" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="<?php echo base_url('assets') ?>/user/img/portfolio/3.jpeg" class="responsive-img materialboxed">
        </div>
      </div>
      </div>
    </div>
  </section>

    <!-- informasisurat -->
  <section id="portfolio" class="contact grey lighten-3 scrollspy">
    <div class="container">
      <h3 class="light center grey-text text-darken-3">Informasi Surat</h3>
      <h5> <p align=left>Kelurahan merupakan ujung tombak dari pemerintahan, khususnya pemerintah daerah yang secara langsung memberikan pelayanan kepada masyarakat. Untuk itu kelurahan dituntut bekerja secara prima dalam memberikan pelayanan kepada masyarakat mengacu pada pedoman penyelenggaraan pelayanan publik yang baik. Untuk pelayanan publik di Kantor Kelurahan Nagori Naga Soppa buka pada hari : </p> 
      <p align=left>Hari Senin s.d Kamis Jam 07.00 WIB – 15.00 WIB
      Hari Jumat Jam 07.00 WIB – 11.15 WIB
      Hari Sabtu dan Minggu Libur
      Contact person : Buana cipta (0813 9694 2928) </p>
      <p align=left>Adapun beberapa layanan administratif yang dapat diurus di Kelurahan Pedalangan sebagai berikut :
      <ol type=”tipenomor”>
<li>Surat Pengantar Nikah, Talak, Cerai, Rujuk (NTCR)</li>
<li>Surat Keterangan Kelahiran</li>
<li>Surat Keterangan Kematian</li>
<li>Surat Pengantar Pembuatan Dispensasi Nikah Mendadak</li>
<li>Surat Pengantar Penerbitan Duplikat Surat Nikah</li>
<li>Surat Keterangan Belum Menikah, Duda/Janda</li>
<li>Surat Keterangan Tidak Mampu untuk Pengajuan Keringanan Biaya Sekolah/Pengajuan Beasiswa</li>
<li>Surat Keterangan Wali Nikah
</ol>

<ol type=”tipenomor”>
<li>Surat Pengantar pembuatan Surat Keterangan Catatan Kepolisian (SKCK)</li>
<li>Surat Pengantar Penerbitan Kartu Tanda Penduduk (KTP)</li>
<li>Surat Pengantar Penerbitan Kartu Keluarga (KK)</li>
<li>Surat Pengantar Pembuatan Surat Pindah</li>
<li>Surat Keterangan Boro Kerja</li>
<li>Surat Pengantar Calon Tenaga Kerja Indonesia (TKI/TKW)</li>
<li>Surat Pengantar Pengambilan Uang di Bank/Lembaga Lain</li>
<li>Legalisasi Umum</li>
</ol>

<ol type=”tipenomor”>
<li>Surat Rekomendasi Ijin Kegiatan/Keramaian</li>
<li>Surat Pengantar Pembuatan Pernyataan Ahli Waris</li>
<li>Surat Pengantar Pembuatan Konversi Tanah</li>
<li>Pengesahan Surat Pernyataan Tidak Keberatan tetangga yang dipersyaratkan dalam penerbitan Ijin Mendirikan Bangunan (IMB)</li>
<li>Pengesahan Surat Pernyataan Tidak Keberatan tetangga yang dipersyaratkan dalam penerbitan Ijin Gangguan (HO)</li>
<li>Surat Keterangan Domisili Tempat Usaha</li>
<li>Legalisasi Umum</li>
</ol>
   </p></h5>

      </div>
      </div>
    </div>
  </section>

  <?php if ($this->session->userdata('email')) : ?>
    <section id="surat" class="contact scrollspy">
      <div class="container">
        <h3 class="light center grey-text text-darken-3">Pengajuan Surat</h3>
        <div class="row justify-content-center" style="margin-bottom: 80px">
          <div class="col-lg-10">
            <?php if ($surat) : ?>
              <table class="table">
                <tr>
                  <th>Judul</th>
                  <th>Keterangan</th>
                  <th>Tanggal</th>
                  <th>Status</th>
                </tr>
                <?php foreach ($surat as $item) : ?>
                  <tr>
                    <td><?= $item->judul ?></td>
                    <td><?= $item->keterangan ?></td>
                    <td><?= $item->diajukan_tgl ?></td>
                    <?php if ($item->status == 'dikirim') : ?>
                      <td style="color: skyblue;"><?= $item->status ?></td>
                    <?php elseif ($item->status == 'diproses') : ?>
                      <td style="color: yellow;"><?= $item->status ?></td>
                    <?php else : ?>
                      <td style="color: green;"><?= $item->status ?></td>
                    <?php endif; ?>
                  </tr>
                <?php endforeach; ?>
              </table>
              <div>
                <small><i>*Surat yang telah selesai diproses harap ambil di balai desa</i></small>
              </div>
            <?php else : ?>
              <div class="col-lg-12">
                <h4 class="center">Belum ada surat diajukan</h4>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="row mb-3 justify-content-center">
          <h4>Ajukan surat</h4>
          <div class="col-lg-10">
            <form action="<?= base_url('/surat/add') ?>" method="post">
              <div style="margin-bottom: 10px">
                <label for="judulInput" class="form-label">Judul surat</label>
                <input type="text" class="form-control" id="judulInput" name="judul">
              </div>
              <div style="margin-bottom: 10px">
                <label for="keteranganInput" class="form-label">Keterangan surat</label>
                <input type="text" class="form-control" id="keteranganInput" name="keterangan">
              </div>
              <div style="margin-bottom: 10px">
                <button type="submit" class="btn btn-info">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>
  <!-- contact -->
  <section id="contact" class="contact grey lighten-3 scrollspy">
    <div class="container">
      <h3 class="center light grey-text text-darken-3">Kontak</h3>
      <div class="row">
        <div class="col m5 s12">
          <div class="card-panel yellow darken-3 center white-text">
            <i class="material-icons medium">email</i>
            <h3>Kontak</h3>
          </div>
          <?php foreach ($identitas as $idn) : ?>
            <ul class="collection with-header">
              <li class="collection-header">
                <h4>Alamat</h4>
              </li>
              <li class="collection-item"><?php echo $idn->judul_website; ?></li>
              <li class="collection-item"><?php echo $idn->alamat; ?></li>
              <li class="collection-item"><?php echo $idn->provinsi; ?></li>
              <li class="collection-item">Phone : <?php echo $idn->no_telepon; ?></li>
            </ul>
          <?php endforeach; ?>
        </div>

        <div class="col m7 s12">
          <form method="post" action="<?php echo base_url('user/message'); ?>">
            <div class=" card-panel">
              <div class="input-field">
                <input id="name" type="text" name="nama" required>
                <label for="name">Nama</label>
              </div>
              <div class="input-field">
                <input id="email" type="email" name="email" class="validate">
                <label for="email">Email</label>
              </div>
              <div class="input-field">
                <input id="phone" type="text" name="no_telepon">
                <label for="phone">Nomor Telepon</label>
              </div>
              <div class="input-field">
                <textarea name="pesan" id="message" class="materialize-textarea"></textarea>
                <label for="message">Pesan</label>
              </div>

              <button class="btn warna text-darken-2" type="submit">Kirim</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


  <!-- footer -->
  <footer class="yellow darken-3 white-text center">
    <p style="font-size: 15px;" class="flow-text">copyright Sistem Informasi Desa Pangulu Nagori Naga Soppa <?php echo date('Y'); ?></p>
  </footer>

  <!-- JAVASCRIPT -->

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="<?php echo base_url('assets') ?>/user/js/materialize.min.js"></script>

  <!-- sidenav -->
  <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);


    //slider

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      duration: 400,
      interval: 5000
    });

    const paralax = document.querySelectorAll('.parallax');
    M.Parallax.init(paralax);

    const materialbox = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(materialbox);

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
      scrollOffset: 50
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul li a').click(function() {
        $('li a').removeClass("active");
        $(this).addClass("active");
      });
    });
  </script>
</body>

</html>