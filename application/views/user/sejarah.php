<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Profil</h2>
      <ol>
        <li>Profil</li>
        <li>Sejarah</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->



 <!-- ======= Our Team Section ======= -->
 <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Sejarah <strong><?php foreach ($identitas as $idx) {
                    echo $idx->judul_website;
                  } ?></strong></h2>
        </div>
        <div class="row-content" data-aos="fade-up">
          <?php foreach ($about as $row) { ?>
            <p align="justify"><?= $row->about_us ?></p>
          <?php } ?>
        </div>

        
        </div>
      </div>
 </section>

</main>