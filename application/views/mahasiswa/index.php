<!DOCTYPE html>
<html>
<head>
  <title>Elearning | Dashboard</title>
  <?php include('link.php') ?> <!-- ini link meta dan css -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style media="screen">
  .border-hidden{
  border: none !important;
  }
  li p{display: block !important; margin-left: 30px; margin-right: 30px;}
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include('header.php'); ?> <!-- manggil header (navbar nya) -->

  <?php include('sidebar.php'); ?>  <!-- manggil sidebar (menu kiri nya) -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>



    <section class="content">
      <div class="row">
        <div class="col-md-8">
          <div class="box box-primary">
            <div class="box-header text-center">
              <h3>Universitas Maritim Raja Ali Haji</h3>
              <h4>Fakultas Teknik</h4>
              <h5>Teknik Informatika</h5>
              <hr style="width:80%; border:2px solid blue;">
            </div>
            <div class="box-body text-justify">
              <h4 class="text-center">Visi</h4>
              <ol type="1">
                <li><p>visi teknik informatika visi teknik informatika visi teknik informatika visi teknik informatika visi teknik informatika visi teknik informatika visi teknik informatika</p></li>
                <li><p>visi teknik informatika visi teknik informatika visi teknik informatika visi teknik informatika visi teknik informatika visi teknik informatika visi teknik informatika</p></li>
                <li><p>visi teknik informatika visi teknik informatika visi teknik informatika visi teknik informatika visi teknik informatika visi teknik informatika visi teknik informatika</p></li>
              </ol>
              <h4 class="text-center">Misi</h4>
              <ol type="1">
                <li><p>visi teknik informatika visi teknik informatika visi teknik informatika visi teknik informatika visi teknik informatika visi teknik informatika visi teknik informatika</p></li>
                <li><p>visi teknik informatika visi teknik informatika visi teknik informatika visi teknik informatika visi teknik informatika visi teknik informatika visi teknik informatika</p></li>
                <li><p>visi teknik informatika visi teknik informatika visi teknik informatika visi teknik informatika visi teknik informatika visi teknik informatika visi teknik informatika</p></li>
              </ol>
            </div>
          </div>
        </div>
        <div class="col-md-4">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>dist/img/icon.jpg" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $this->session->userdata('nama') ?></h3>

              <p class="text-muted text-center">Teknik Informatika</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item text-center">
                  <b>FAKULTAS TEKNIK</b>
                </li>
                <li class="list-group-item text-center">
                  <b>UNIVERSITAS<br>MARITIM RAJA ALI HAJI</b>
                </li>
              </ul>

              <a href="<?php echo base_url(); ?>index.php/mahasiswa/c_mahasiswa/profil" class="btn btn-primary btn-block"><b>Go to Profil</b></a>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>



  <!-- /.content-wrapper -->
  <footer class="main-footer text-center">
    <strong>Copyright &copy; 2017 <a href="">Muhammad Sarimin</a> & <a href="">Ade Putra NS</a>.</strong> All rights
    reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
  </div>

<?php include('script.php') ?>
<!-- jQuery 2.2.3 -->
</body>
</html>
