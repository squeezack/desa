<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Surat</h2>
                <ol>
                    <li>Beranda</li>
                    <li>Surat</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <?php if ($this->session->userdata('email')) : ?>
        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Pengajuan Surat <strong><?php foreach ($identitas as $idx) {
                                                    echo $idx->judul_website;
                                                } ?></strong></h2>
                </div>
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
                        <h4>
                            <center>Belum ada surat diajukan</center>
                        </h4>
                    </div>
                <?php endif; ?>
            </div>
            </div>
            <section id="team" class="team section-bg">
                <div class="container">

                    <div class="section-title" data-aos="fade-up">
                        <h2>Ajukan Surat <strong><?php foreach ($identitas as $idx) {
                                                        echo $idx->judul_website;
                                                    } ?></strong></h2>
                    </div>
                    <div class="row mt-5 justify-content-center" data-aos="fade-up">
                        <div class="col-lg-10 contact">
                            <form action="<?= base_url('/surat/add') ?>" method="post" >
                                <div class="row">

                                    <div class="col-md-6 form-group">
                                        <input type="text" name="judul" class="form-control" id="judulInput" placeholder="Judul Surat" required>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" name="keterangan" id="keteranganInput" placeholder="Keterangan Surat" required>
                                    </div>
                                    <br>

                                    <div class="text-center php-email-form"><button type="submit">Kirim Pengajuan</button></div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

</main>