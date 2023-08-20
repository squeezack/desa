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
              <h3 class="box-title">Daftar Surat Masuk</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed table-bordered table-striped">
                <thead>
                  <tr>
                    <th class="text-center" style="width: 40px;">No</th>
                    <th>Judul</th>
                    <th>Keterangan</th>
                    <th>Pengirim</th>
                    <th>Nomor HP</th>
                    <th>Status</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $i = 1;
                    foreach($surat as $row) :
                   ?>
                  <tr>
                    
                    <td class="text-center"><?php echo $i++; ?></td>
                    <td><?php echo $row->judul; ?></td>
                    <td><?php echo $row->keterangan; ?></td>
                    <td><?php echo $row->username; ?>
                    <td><?php echo $row->no_telepon; ?></td>
                    <td><?=$row->status?></td>
                    <td class="text-center">

                      <a title="Lihat Detail Pesan" href="<?php echo base_url('surat/update/'.$row->id); ?>" class="btn btn-sm btn-primary">
                        <i class="fa fa-edit"></i>
                      </a>

                      <a title="Delete Pesan" href="<?php echo base_url('surat/delete/'.$row->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Akan dihapus?');">
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


