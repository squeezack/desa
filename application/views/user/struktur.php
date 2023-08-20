<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Profil</h2>
                <ol>
                    <li>Profil</li>
                    <li>Struktur</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Struktur <strong><?php foreach ($identitas as $idx) {
                                            echo $idx->judul_website;
                                        } ?></strong></h2>
            </div>

            <div class="row portfolio-container" data-aos="fade-up">

                <div class="col-lg-6 col-md-12  portfolio-item filter-card" align="justify">
                    <img src="<?php echo base_url('assets/img/struktur_organisasi.jpg') ?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <a href="<?php echo base_url('assets/img/struktur_organisasi.jpg') ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link">Lihat</a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

</main>