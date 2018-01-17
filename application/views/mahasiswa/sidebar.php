<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>dist/img/icon.jpg" class="img-circle" alt="User Image">
      </div>


      <div class="pull-left info">
        <p><?php echo ($this->session->userdata('nama'));?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>


    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">Menu Sistem</li>
      <li class="active treeview">
        <a href="<?php echo base_url(); ?>index.php/mahasiswa/c_mahasiswa">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      <li class="treeview">
        <a href="<?php echo base_url(); ?>index.php/mahasiswa/c_mahasiswa/profil">
          <i class="glyphicon glyphicon-user"></i> <span>Profil</span>
        </a>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-list-ul"></i> <span>Mata Kuliah</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url(); ?>index.php/auth/datars"><i class="fa fa-save"></i> Pilih Mata Kuliah</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/mahasiswa/c_mahasiswa/krslihat"><i class="fa fa-eye"></i> Lihat Mata Kuliah</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-graduation-cap"></i> <span>Bahan Ajar</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a  href="<?php echo base_url(); ?>index.php/mahasiswa/c_mahasiswa/lihat_materi"><i class="fa fa-user"></i>Materi</a></li>
          <li><a  href="<?php echo base_url(); ?>index.php/mahasiswa/c_mahasiswa/lihat_tugas"><i class="fa fa-bank"></i>Tugas</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/mahasiswa/c_mahasiswa/list_quis"><i class="fa fa-calendar-check-o "></i>Quis</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a data-toggle="modal" data-target="#reset-pass"><i class="fa fa-key"></i>Ubah Password</a>
              <span class="pull-right-container">
              </span>
          </a>
      </li>

      <li class="treeview">
          <a  href="<?php echo site_url('/mahasiswa/c_mahasiswa/logout'); ?>">
              <i class="fa fa-power-off"></i>  <span>Logout</span>
              <span class="pull-right-container">
              </span>
          </a>
      </li>


 </section>
  <!-- /.sidebar -->
</aside>
<!-- Modal -->
              <div id="reset-pass" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                      <!-- konten modal-->
                      <div class="modal-content">
                      <form action="<?php echo base_url('index.php/auth/reset_pass');?>" role="form" enctype="multipart/form-data" method="post">
                          <!-- heading modal -->
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Ubah Password</h4>
                          </div>
                          <!-- body modal -->
                          <div class="modal-body">

                          <div class="form-group">
                              <label>Password Baru</label>
                              <input type="password" class="form-control" name="password" placeholder="Password Baru ...">
                          </div>

                          </div>
                          <!-- footer modal -->
                          <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>

                      </form>
                      </div>
                  </div>
              </div><!-- Modal -->
