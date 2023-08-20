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
      <?php echo $this->session->flashdata('pesan'); ?>
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">

          <div class="box">
            <div class="box-header">
              <button type="button" class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#modal-info">
                <i class="fa fa-plus"> Penduduk</i> 
              </button>
              <h3 class="box-title">Tabel Penduduk</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed table-bordered table-striped">
                <thead>
                  <tr>
                    <th class="text-center" style="width: 40px;">No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Tempat/Tgl-Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Status</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $i = 1;
                    foreach($penduduk as $row) :
                   ?>
                  <tr>
                    
                    <td class="text-center"><?php echo $i++; ?></td>
                    <td><?php echo $row->nik; ?></td>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->tempat_lahir; ?>, <?php echo $row->tgl_lahir; ?></td>
                    <td><?php echo $row->jk; ?></td>
                    <td><?php echo $row->status; ?></td>
                    <td class="text-center">

                      <a title="Lihat Detail Pesan" href="<?php echo base_url('admin/penduduk/update/'.$row->id_penduduk); ?>" class="btn btn-sm btn-primary">
                        <i class="fa fa-edit"></i>
                      </a>

                      <a title="Delete Pesan" href="<?php echo base_url('admin/penduduk/delete/'.$row->id_penduduk); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Akan dihapus?');">
                        <i class="fa fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<!-- Modal -->
<div class="modal modal-default fade" id="modal-info">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Form Tambah Data Penduduk</h3>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url('admin/penduduk/add'); ?>">
          <div class="form-group">
            <label>NIK</label>
            <input type="text" name="nik" class="form-control">
          </div>
          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">
          </div>
          <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control">
          </div>
          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control">
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label><br>
            <label for="L">Laki-Laki </label> : <input id="L" type="radio" name="jk" value="Laki-Laki"> || 
            <label for="P">Perempuan </label> : <input id="P" type="radio" name="jk" value="Perempuan">
          </div>
          <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control">
              <option> --Pilih Status-- </option>
              <option value="Kawin"> Kawin </option>
              <option value="Belum Kawin"> Belum Kawin </option>
              <option value="Janda"> Janda </option>
              <option value="Duda"> Duda </option>
            </select>
          </div>
        
          
          <div class="modal-footer">
            <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Simpan</i></button>
          </div>

        </form>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
</div>
<!-- /.modal -->