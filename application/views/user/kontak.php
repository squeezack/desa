<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Kontak</h2>
                <ol>
                    <li>Beranda</li>
                    <li>Kontak</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->



    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Kontak <strong><?php foreach ($identitas as $idx) {
                                        echo $idx->judul_website;
                                    } ?></strong></h2>
            </div>
            <section id="contact" class="contact">
                <div class="container">

                    <div class="row justify-content-center" data-aos="fade-up">

                        <div class="col-lg-10">
                            <div class="info-wrap">
                                <div class="row">
                                    <?php foreach ($identitas as $row) { ?>
                                        <div class="col-lg-4 info">
                                            <i class="bi bi-geo-alt"></i>
                                            <h4>Lokasi:</h4>
                                            <p><?= $row->alamat ?><br><?= $row->provinsi ?></p>
                                        </div>

                                        <div class="col-lg-4 info mt-4 mt-lg-0">
                                            <i class="bi bi-envelope"></i>
                                            <h4>Email:</h4>
                                            <p><?= $row->email ?></p>
                                        </div>

                                        <div class="col-lg-4 info mt-4 mt-lg-0">
                                            <i class="bi bi-phone"></i>
                                            <h4>Telephone:</h4>
                                            <p><?= $row->no_telepon ?></p>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="row mt-5 justify-content-center" data-aos="fade-up">
                        <div class="col-lg-10">
                            <form action="<?php echo base_url('user/message'); ?>" method="post" class="php-email-form">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="nama" class="form-control" id="name" placeholder="Nama Kamu" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" class="form-control" name="email" id="email" class="validate" placeholder="Email Kamu" required>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="no_telepon" id="phone" placeholder="Nomor Telephone" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="pesan" id="message" rows="5" placeholder="Pesan" required></textarea>
                                </div>
                                
                                <div class="text-center"><button type="submit">Kirim Pesan</button></div>
                            </form>
                        </div>

                    </div>

                </div>
            </section><!-- End Contact Section -->

        </div>
        </div>
    </section>

</main>