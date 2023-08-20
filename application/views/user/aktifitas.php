<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Kegiatan</h2>
      <ol>
        <li>Beranda</li>
        <li>Kegiatan</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->



 <!-- ======= Our Team Section ======= -->
 <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Fasilitas <strong><?php foreach ($identitas as $idx) {
                    echo $idx->judul_website;
                  } ?></strong></h2>
        </div>
        <div class="row">

          <?php foreach ($aktifitas as $row) { ?>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up">
                <div class="member-img">
                  <img src="<?php echo base_url('assets/user/img/' . $row->gambar) ?>" style="max-height: 200px;" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4><?php echo $row->judul; ?></h5>
                  </h4>
                  <span><?php echo $row->isi; ?></span>
                </div>
              </div>
            </div>
          <?php } ?>

        </div>

        
        </div>
      </div>
 </section>

</main>