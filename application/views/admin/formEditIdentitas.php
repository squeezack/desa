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
              <h3 class="box-title">Edit Identitas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach($identitas as $idn) : ?>

            <form role="form" action="<?php echo base_url('admin/identitas/aksiIdentitas'); ?>" method="post">

              <div class="row">
                <div class="col-md-6">
                  <div class="box-body">
                    <div class="form-group">
                      <input type="hidden" name="id" value="<?php echo $idn->id; ?>">

                      <label for="judulweb">Judul Website</label>
                      <input type="text" class="form-control" id="judulweb" name="judul_website" value="<?php echo $idn->judul_website; ?>">
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $idn->alamat; ?>">
                    </div>
                    <div class="form-group">
                      <label for="provinsi">Provinsi</label>
                      <input type="text" class="form-control" name="provinsi" id="provinsi" value="<?php echo $idn->provinsi; ?>">
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="email" id="email" value="<?php echo $idn->email; ?>">
                    </div>
                    <div class="form-group">
                      <label for="no_telepon">No Telepon</label>
                      <input type="text" class="form-control" name="no_telepon" id="no_telepon" value="<?php echo $idn->no_telepon; ?>">
                    </div>
                  </div>

                  <div class="box-footer">
                    <a href="<?php echo base_url('admin/identitas'); ?>" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn btn-primary">Save Change</button>
                  </div>

                </div>
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