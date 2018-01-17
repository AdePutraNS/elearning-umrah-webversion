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
<div class="content">

  <?php include('header.php'); ?> <!-- manggil header (navbar nya) -->

  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        E-Learning
        <small>Forum Teknik informatika UMRAH</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Forum</li>
      </ol>
    </section>



    <section class="content">

      <div class="row">
    <div class="col-md-12 connectedSortable">
      <div class="box box-primary collapsed-box">
        <div class="box-header">
          <i class="fa fa-comments-o"></i>
          <h3 class="box-title">Judul Baru</h3>
          <div class="pull-right box-tools">
            <button type="button" class="btn btn-success btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
            <i class="fa fa-plus"></i></button>
          </div>
        </div>

        <div class="box-body chat">
          <?php echo form_open('auth/simpan_forum'); ?>
          <form action="<?php echo base_url('index.php/auth/simpan_forum')?>" method="post">
            <input type="text" class="form-control border-hidden" name="judul" placeholder="Judul permasalahan...">
            <hr style="margin-top:0px;">
            <textarea class="form-control border-hidden" name="isi" rows="3" style="resize:none" placeholder="isi permasalahan..."></textarea>
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-folder-open text-blue"></span></button>
                <button type="button" class="btn btn-default btn-sm"><span class="fa fa-photo text-blue"></span></button>
              </div>
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <?php foreach ($data as $forum) {
  ?>
    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-header">
          <h3 style="margin:0"><?php echo $forum->judul; ?></h3>
        </div>
        <div class="box-body">
          <p><?php echo $forum->isi; ?></p>
        </div>
      </div>
    </div>

<?php } ?>
  </div>
    </section>
    <!-- /.content -->



  </div>
  <!-- /.content-wrapper -->

  <div class="control-sidebar-bg"></div>
  <footer class="box-footer text-center">
    <strong>Copyright &copy; 2017 <a href="">Muhammad Sarimin</a> & <a href="">Ade Putra NS</a>.</strong> All rights
    reserved.
  </footer>
</div>

<?php include('script.php') ?>
<!-- jQuery 2.2.3 -->
</body>
</html>
