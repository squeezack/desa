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
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed table-bordered table-striped">
                <tbody>
                  <tr>
                    <th style="width: 40px;">No</th>
                    <th>Nama</th>
                    <th>pesan</th>
                    <th>Aksi</th>
                  </tr>

                  <?php 
                    $i = 1;
                    foreach($pesan as $psn) :
                   ?>
                  <tr>
                    
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $psn->nama; ?></td>
                    <td><?php echo word_limiter($psn->pesan, 20); ?></td>
                    <td>
                      <a title="Lihat Detail Pesan" href="<?php echo base_url('admin/pesan/detailPesan/'.$psn->id); ?>" class="btn btn-sm btn-primary">
                        <i class="fa fa-eye"></i>
                      </a>

                      <a title="Delete Pesan" href="<?php echo base_url('admin/pesan/delete/'.$psn->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Akan dihapus?');">
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