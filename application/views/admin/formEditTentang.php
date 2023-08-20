  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title; ?>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Tentang Lembaga</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach($about as $abt) : ?>

            <form role="form" action="<?php echo base_url('admin/identitas/aksiTentang'); ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <input type="hidden" name="id" value="<?php echo $abt->id; ?>">

                  <label for="about">Sejarah</label>
                  <textarea style="width: 700px; height: 110px;" id="about" class="form-control" name="about_us"><?php echo $abt->about_us; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="visi">Visi</label>
                  <textarea style="width: 700px; height: 110px;" id="visi" name="visi" class="form-control"><?php echo $abt->visi; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="misi">Misi</label>
                  <textarea style="width: 700px; height: 110px;" id="misi" name="misi" class="form-control"><?php echo $abt->misi; ?></textarea>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="<?php echo base_url('admin/identitas'); ?>" class="btn btn-warning">Cancel</a>
                <button type="submit" class="btn btn-primary">Save Change</button>
              </div>
            </form>
            <?php endforeach; ?>

          </div>
        </div>
      </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->