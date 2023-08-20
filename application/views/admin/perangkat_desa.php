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
                <i class="fa fa-plus"> Perangkat Desa</i> 
              </button>
              <h3 class="box-title">Tabel Perangkat Desa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed table-bordered table-striped">
                <thead>
                  <tr>
                    <th class="text-center" style="width: 40px;">No</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Pendidikan</th>
                    <th>Keterangan</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $i = 1;
                    foreach($perangkat as $row) :
                   ?>
                  <tr>
                    
                    <td class="text-center"><?php echo $i++; ?></td>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->jabatan; ?></td>
                    <td><?php echo $row->pendidikan; ?>
                    <td><?php echo $row->keterangan; ?></td>
                    <td class="text-center">

                      <a title="Lihat Detail Pesan" href="<?php echo base_url('admin/perangkatDesa/update/'.$row->id); ?>" class="btn btn-sm btn-primary">
                        <i class="fa fa-edit"></i>
                      </a>

                      <a title="Delete Pesan" href="<?php echo base_url('admin/perangkatDesa/delete/'.$row->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Akan dihapus?');">
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
        <h3 class="modal-title">Form Tambah Data Perangkat Desa</h3>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url('admin/perangkatDesa/add'); ?>">
          
          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">
          </div>
          <div class="form-group">
            <label>Jabatan</label>
            <input type="text" name="jabatan" class="form-control">
          </div>
          <div class="form-group">
            <label>Pendidikan</label>
            <select name="pendidikan" class="form-control">
              <option> --Pilih Pendidikan-- </option>
              <option value="SD"> SD </option>
              <option value="SMP"> SMP </option>
              <option value="SMA/SLTA"> SMA/SLTA </option>
              <option value="S1"> S1 </option>
              <option value="S2"> S2 </option>
              <option value="S3"> S3 </option>
              <option value="Lainnya"> Lainnya.. </option>
            </select>
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <textarea style="height: 80px" class="form-control" name="keterangan"></textarea>
          </div>
        
          
          <div class="modal-footer">
            <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
          </div>

        </form>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
</div>
<!-- /.modal -->