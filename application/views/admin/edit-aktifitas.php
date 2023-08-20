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
              <h3 class="box-title">Edit aktifitas</h3>
            </div>
            <div class="box-body">
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_url('admin/aktifitas/edit_aksi'); ?>" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
                <label>Judul</label>
                <input type="hidden" name="id_aktifitas" class="form-control" value="<?php echo $aktifitas['id_aktifitas']; ?>">
                <input type="text" name="judul" class="form-control" value="<?php echo $aktifitas['judul']; ?>">
              </div>
              <div class="form-group">
                <label>Isi</label>
                <input type="text" name="isi" class="form-control" value="<?php echo $aktifitas['isi']; ?>">
              </div>

              <div class="form-group">
                <input type="file" name="gambar">
              </div>

              <a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/aktifitas'); ?>">Batal</a>
              <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"> Simpan</i></button>
            
            </form>
            </div>

          </div>
        </div>
      </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->