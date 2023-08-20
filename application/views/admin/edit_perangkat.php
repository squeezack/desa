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
              <h3 class="box-title">Edit Perangkat Desa</h3>
            </div>
            <div class="box-body">
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_url('admin/perangkatDesa/update_aksi'); ?>" method="post">
              
              <div class="form-group">
                <label>Nama</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $perangkat['id']; ?>">
                <input type="text" name="nama" class="form-control" value="<?php echo $perangkat['nama']; ?>">
              </div>
              <div class="form-group">
                <label>Jabatan</label>
                <input type="text" name="jabatan" class="form-control" value="<?php echo $perangkat['jabatan']; ?>">
              </div>
              <div class="form-group">
                <label>Pendidikan</label>
                <select name="pendidikan" class="form-control">
                  <option <?php echo ($perangkat['pendidikan'] == 'SD')? "selected" : ""; ?>> SD </option>
                  <option <?php echo ($perangkat['pendidikan'] == 'SMP')? "selected" : ""; ?>> SMP </option>
                  <option <?php echo ($perangkat['pendidikan'] == 'SMA/SLTA')? "selected" : ""; ?>> SMA/SLTA </option>
                  <option <?php echo ($perangkat['pendidikan'] == 'S1')? "selected" : ""; ?>> S1 </option>
                  <option <?php echo ($perangkat['pendidikan'] == 'S2')? "selected" : ""; ?>> S2 </option>
                  <option <?php echo ($perangkat['pendidikan'] == 'S3')? "selected" : ""; ?>> S3 </option>
                  <option <?php echo ($perangkat['pendidikan'] == 'Lainnya')? "selected" : ""; ?>> Lainnya.. </option>
                </select>
              </div>
               <div class="form-group">
                <label>Keterangan</label>
                <textarea name="keterangan" style="width: 700px; height: 80px;" class="form-control"><?php echo $perangkat['keterangan']; ?></textarea>
              </div>

              <a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/penduduk'); ?>">Batal</a>
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