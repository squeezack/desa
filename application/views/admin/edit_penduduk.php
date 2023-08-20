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
              <h3 class="box-title">Edit Penduduk</h3>
            </div>
            <div class="box-body">
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_url('admin/penduduk/update_aksi'); ?>" method="post">
              
              <div class="form-group">
                <label>NIK</label>
                <input type="hidden" name="id_penduduk" class="form-control" value="<?php echo $penduduk['id_penduduk']; ?>">
                <input type="text" name="nik" class="form-control" value="<?php echo $penduduk['nik']; ?>">
              </div>
              <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $penduduk['nama']; ?>">
              </div>
              <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $penduduk['tempat_lahir']; ?>">
              </div>
              <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $penduduk['tgl_lahir']; ?>">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label><br>
                <label for="L">Laki-Laki </label> : <input id="L" type="radio" name="jk" value="Laki-Laki" <?php echo ($penduduk['jk'] == 'Laki-Laki')? "checked" : ""; ?>> || 
                <label for="P">Perempuan </label> : <input id="P" type="radio" name="jk" value="Perempuan" <?php echo ($penduduk['jk'] == 'Perempuan')? "checked" : ""; ?>>
              </div>
              <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                  <option> --Pilih Status-- </option>
                  <option <?php echo ($penduduk['status'] == 'Kawin')? "selected" : ""; ?>> Kawin </option>
                  <option <?php echo ($penduduk['status'] == 'Belum Kawin')? "selected" : ""; ?>> Belum Kawin </option>
                  <option <?php echo ($penduduk['status'] == 'Janda')? "selected" : ""; ?>> Janda </option>
                  <option <?php echo ($penduduk['status'] == 'Duda')? "selected" : ""; ?>> Duda </option>
                </select>
              </div>

              <a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/penduduk'); ?>">Batal</a>
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