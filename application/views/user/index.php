

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(<?php echo base_url('assets') ?>/user/img/slider/desa.jpeg">;">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>
                <center>Selamat Datang di Kantor Desa Pangulu <span><?php foreach ($identitas as $idx) {
                                                                      echo $idx->judul_website;
                                                                    } ?></span></center>
              </h2>
              <h2>
                <center>Kabupaten Simalungun</center>
              </h2>
              <!-- <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> -->
            </div>
          </div>
        </div>



      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <section id="team" class="team section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-left">
          <h2><strong>Tentang</strong></h2>
        </div>
        <div class="row-content" data-aos="fade-up">
          <?php foreach ($about as $row) { ?>
            <p align="justify"><?= $row->about_us ?></p>
          <?php } ?>
        </div>
      </div>
    </section>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                </svg>
                <i class="bx bx-layer"></i>
              </div>
              <h4><a href="<?= base_url('user/sejarah') ?>">Sejarah Desa</a></h4>
              <p><?php foreach ($identitas as $idx) {
                    echo $idx->judul_website;
                  } ?>
                Kabupaten Simalungun</p><br>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-file"></i>
              </div>
              <h4><a href="<?= base_url('user/struktur') ?>">Struktur Desa</a></h4>
              <p><?php foreach ($identitas as $idx) {
                    echo $idx->judul_website;
                  } ?>
                Kabupaten Simalungun</p><br>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                </svg>
                <i class="bx bx-arch"></i>
              </div>
              <h4><a href="<?= base_url('user/visi') ?>">Visi & Misi Desa</a></h4>
              <p><?php foreach ($identitas as $idx) {
                    echo $idx->judul_website;
                  } ?>
                Kabupaten Simalungun</p><br>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2><strong>Kegiatan</strong></h2>
        </div>

        <div class="row">

          <?php foreach ($aktifitas as $row) { ?>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up">
                <div class="member-img">
                  <img src="<?php echo base_url('assets/user/img/' . $row->gambar) ?>" style="max-height: 200px;" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4><?php echo $row->judul; ?></h4>
                  <h4><p style="color: black;"> <?php echo $row->isi; ?></p></h4>
                </div>
              </div>
            </div>
          <?php } ?>

        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2><strong>Fasilitas</strong></h2>
        </div>

        <div class="row">

          <?php foreach ($fasilitas as $row) { ?>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up">
                <div class="member-img">
                  <img src="<?php echo base_url('assets/user/img/portfolio/' . $row->gambar) ?>" style="max-height: 200px;" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4><?php echo $row->judul; ?></h4>
                  <h4><p style="color: black;"> <?php echo $row->isi; ?></p></h4>
                </div>
              </div>
            </div>
          <?php } ?>

        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2><strong>Produk UMKM</strong></h2>
        </div>

        <div class="row">

          <?php foreach ($kegiatan as $row) { ?>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up">
                <div class="member-img">
                  <img src="<?php echo base_url('assets/user/img/' . $row->gambar) ?>" style="max-height: 200px;" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4><?php echo $row->judul; ?></h4>
                  <h4><p style="color: black;"> <?php echo $row->isi; ?></p></h4>
                </div>
              </div>
            </div>
          <?php } ?>

        </div>

      </div>
    </section><!-- End Our Team Section -->

    </main><!-- End #main -->
