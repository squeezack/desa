  <!-- Left side column. contains the logo and sidebar -->

  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="list">
          <a href="<?php echo base_url('admin/dashboard'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="list">
          <a href="<?php echo base_url('admin/penduduk'); ?>">
            <i class="fa fa-users"></i>
            <span>Data Penduduk</span>
          </a>
          <!-- 
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/identitas') ?>"><i class="fa fa-circle-o"></i> Identitas Perusahaan</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Portfolio</a></li>
          </ul> -->
        </li>

        <li class="list">
          <a href="<?php echo base_url('admin/perangkatDesa'); ?>">
            <i class="fa fa-users"></i> <span>Perangkat Desa</span>
          </a>
        </li>

        <!-- <li class="list">
          <a href="<?php echo base_url('surat/list'); ?>">
            <i class="fa fa-envelope"></i> <span>Surat Masuk</span>
          </a>
        </li> -->

        <li class="list">
          <a href="<?php echo base_url('admin/kegiatan'); ?>">
            <i class="fa fa-users"></i> <span>Produk Olahan UMKM</span>
          </a>
        </li>
        
        <li class="list">
          <a href="<?php echo base_url('admin/aktifitas'); ?>">
            <i class="fa fa-users"></i> <span>Kegiatan</span>
          </a>
        </li>

        <li class="list">
          <a href="<?php echo base_url('admin/pesan'); ?>">
            <i class="fa fa-comments"></i> <span>Pesan</span>
          </a>
        </li>

        <li class="list">
          <a href="<?php echo base_url('admin/identitas'); ?>">
            <i class="fa fa-pie-chart"></i>
            <span>Setting</span>
          </a>
          <!-- 
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/identitas') ?>"><i class="fa fa-circle-o"></i> Identitas Perusahaan</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Portfolio</a></li>
          </ul> -->
        </li>

        <li class="list">
          <a onclick="return confirm('Yakin Akan Akan Keluar?');" href="<?php echo base_url('/login/logout'); ?>">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>