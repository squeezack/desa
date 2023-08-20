  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Data Produk Olahan UMKM
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
              <button type="button" class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#modal-kegiatan">
                <i class="fa fa-plus"> Tambah Produk</i> 
              </button>
              <h3 class="box-title">Produk UMKM</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed table-bordered table-striped">
                <thead>
                  <tr>
                    <th class="text-center" style="width: 40px;">No</th>
                    <th>Judul</th>
                    <th>isi</th>
                    <th>gambar</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $i = 1 ;
                  foreach($kegiatan as $row) { ?>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php  echo $row->judul; ?></td>
                    <td><?php echo $row->isi; ?></td>
                    <td><img style="width: 60px;" src="<?php echo base_url('assets/user/img/'.$row->gambar);?>" class="img-fluid" alt=""></td>
                    <td class="text-center">
                      <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/kegiatan/edit/'.$row->id_kegiatan) ?>">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="<?php echo base_url('admin/kegiatan/delete/'.$row->id_kegiatan); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Konfirmasi menghapus data');">
                        <i class="fa fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                  <?php } ?>
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
<div class="modal modal-default fade" id="modal-kegiatan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Form Tambah Kegiatan Desa</h3>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url('admin/kegiatan/add'); ?>" enctype="multipart/form-data">
          
          <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control">
          </div>
          <div class="form-group">
            <label>Isi</label>
            <input type="text" name="isi" class="form-control">
          </div>
          <div class="form-group">
            <input type="file" name="gambar">
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