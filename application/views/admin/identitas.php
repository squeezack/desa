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
      <?php echo $this->session->flashdata('pesan1'); ?>
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Identitas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed table-bordered table-striped">
                <tbody>
                  <tr>
                    <th style="width: 60px;">Aksi</th>
                    <th>Judul Website</th>
                    <th>Alamat</th>
                    <th>Provinsi</th>
                    <th>Email</th>
                    <th>No. Telepon</th>
                  </tr>

                  <?php 
                    foreach($identitas as $idn) :
                   ?>
                  <tr>
                    <td>
                      <a title="Edit Identitas" href="<?php echo base_url('admin/identitas/editIdentitas/'.$idn->id); ?>" class="btn btn-sm btn-primary">
                        <i class="fa fa-edit"></i>
                      </a>
                    </td>
                    <td><?php echo $idn->judul_website; ?></td>
                    <td><?php echo $idn->alamat; ?></td>
                    <td><?php echo $idn->provinsi; ?></td>
                    <td><?php echo $idn->email; ?></td>
                    <td><?php echo $idn->no_telepon; ?></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tentang Lembaga</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed table-bordered table-striped">
                <tbody>
                  <tr>
                    <th style="width: 60px;">Aksi</th>
                    <th>Sejarah</th>
                    <th>Visi</th>
                    <th>Misi</th>
                  </tr>

                  <?php 
                    foreach($about as $abt) :
                   ?>
                  <tr>
                    <td>
                      <a title="Edit Tentang Perusahaan" href="<?php echo base_url('admin/identitas/editTentang/'.$abt->id); ?>" class="btn btn-sm btn-primary">
                        <i class="fa fa-edit"></i>
                      </a>
                    </td>
                    <td><?php echo $abt->about_us; ?></td>
                    <td><?php echo $abt->visi; ?></td>
                    <td><?php echo $abt->misi; ?></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">

          <div class="box">
            <div class="box-header">
              <button type="button" class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#modal-fasilitas">
                <i class="fa fa-plus">Fasilitas Desa</i> 
              </button>
              <h3 class="box-title">Fasilitas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed table-bordered table-striped">
                <tbody>
                  <tr>
                    <th style="width: 160px;">Aksi</th>
                    <th>Judul</th>
                    <th>Isi</th>
                  </tr>

                  <?php 
                    foreach($fasilitas as $fs) :
                   ?>
                  <tr>
                    <td>
                      <a title="Edit Tentang Perusahaan" href="<?php echo base_url('admin/identitas/editFasilitas/'.$fs->id_fasilitas); ?>" class="btn btn-sm btn-primary">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="<?php echo base_url('admin/identitas/deleteFasilitas/'.$fs->id_fasilitas); ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin akan menghapus fasilitas?');">
                        <i class="fa fa-trash"></i>
                      </a>
                    </td>
                    <td><?php echo $fs->judul; ?></td>
                    <td><?php echo $fs->isi; ?></td>
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
<div class="modal modal-default fade" id="modal-fasilitas">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Form Tambah Fasilitas Desa</h3>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url('admin/identitas/tambahFasilitas'); ?>" enctype="multipart/form-data">
          
          <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control">
          </div>
          <div class="form-group">
            <label>Isi</label>
            <input type="text" name="isi" class="form-control">
          </div>
          <div class="form-group">
              <label for="gambar">Gambar</label>
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