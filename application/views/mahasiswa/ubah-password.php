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
        Ganti Password
        <small>Input Password</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Ganti Pasword</li>
      </ol>
    </section>

    <section class="content">

      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="box box-primary">
            <div class="box-header">
              Ganti Password
            </div>
            <div class="box-body">
              <form>
                  <input class="form-control" type="password" name="password" placeholder="Password Lama">
                  <input type="password" name="password" placeholder="Password Baru">
                  <input type="password" name="password" placeholder="Comfirm Password">
              </form>
            </div>
          </div>
        </div>
      </div>

    </section>
  </div>

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
