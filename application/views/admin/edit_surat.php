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
              <h3 class="box-title">Edit Surat Masuk</h3>
            </div>
            <div class="box-body">
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_url('surat/update_aksi'); ?>" method="post">
              
              <div class="form-group">
                <label>Judul</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $surat->id; ?>">
                <input type="text" name="judul" class="form-control disabled" value="<?php echo $surat->judul; ?>">
              </div>
              <div class="form-group">
                <label>keterangan</label>
                <input type="text" name="keterangan" class="form-control" value="<?php echo $surat->keterangan; ?>">
              </div>
              <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                  <option> --Pilih status-- </option>
                  <option <?php echo ($surat->status == 'dikirim')? "selected" : ""; ?>> dikirim </option>
                  <option <?php echo ($surat->status == 'diproses')? "selected" : ""; ?>> diproses </option>
                  <option <?php echo ($surat->status == 'selesai')? "selected" : ""; ?>> selesai </option>
                </select>
              </div>
              <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Simpan</button>
            
            </form>
            </div>

          </div>
        </div>
      </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->