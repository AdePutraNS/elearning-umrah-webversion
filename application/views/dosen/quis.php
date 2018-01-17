<!DOCTYPE html>
<html>
<head>

  <title>SIPAA | Dashboard</title>
<?php include('link.php') ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include('header.php') ?>
<?php include('sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
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
        <div class="col-md-4">
          <div class="box box-danger">
            <div class="box-header">
              Info Dasar Quis
            </div>
            <div class="box-body">
              <form class="form-horizontal">
                <div class="form-group text-center">
                  <form action="<?php echo base_url('index.php/dosen/c_dosen/set_info_kuis');?>" role="form" enctype="multipart/form-data" method="post">
                  Durasi Quis :
                  <center><div style="margin-top:10px;"class='input-group date' id='datetimepicker1'>
                    Mulai Ujian&nbsp;<span class="glyphicon glyphicon-calendar"></span><input type="datetime-local" class="form-control" name="start">
                  </div>
                  <div style="margin-top:10px;"class='input-group date' id='datetimepicker1'>
                    Selesai Ujian&nbsp;<span class="glyphicon glyphicon-calendar"></span><input type="datetime-local" class="form-control" name="finish">
                  </div></center>
                  <input type="number" style="margin-top:10px;" name="banyak_soal" placeholder="Banyaknya Soal">
                  <select style="width:71%; margin:auto; margin-top:5px; margin-bottom:5px;"class="form form-control" name="kd_mk">
                    <?php
                        foreach ($datas2 as $mk){

                    ?>

                    <option value="<?php echo $mk->kd_mk; ?>_<?php echo $mk->kd_kls; ?>" ><?php echo $mk->nama_mk; ?> - <?php echo $mk->kd_kls; ?></option>
                    <?php } ?>
                  </select>
                  <button type="submit" class="btn btn-danger">Submit</button>
              </form>
                </div>
            </div>
          </div>
        </div>
      </div>
      <form action="" role="form"  method="post">
      <?php
      $n = $datas['banyak_soal'];
      echo $datas['banyak_soal'];
      $i;
      for ($i=1; $i < $n; $i++) { ?>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary collapsed-box">
            <div class="box-header">
              Input Soal Quis
              <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
              <i class="fa fa-plus"></i></button>
            </div>
            <div class="box-body">
              <form class="form-horizontal">
                <div class="form-group text-center">
                  <form action="<?php echo base_url('index.php/dosen/c_dosen/set_info_kuis');?>" role="form" enctype="multipart/form-data" method="post">
                  <input type="number" style="margin-top:10px;" name="banyak_soal" placeholder="Banyaknya Soal">
                  <select style="width:71%; margin:auto; margin-top:5px; margin-bottom:5px;"class="form form-control" name="kd_mk">
                    <?php
                        foreach ($datas2 as $mk){

                    ?>

                    <option value="<?php echo $mk->kd_mk; ?>_<?php echo $mk->kd_kls; ?>" ><?php echo $mk->nama_mk; ?> - <?php echo $mk->kd_kls; ?></option>
                    <?php } ?>
                  </select>
                  <button type="submit" class="btn btn-danger">Submit</button>
              </form>
                </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>

      <button type="button" class="btn btn-default btn-sm"><span class="fa fa-mail-forward text-blue"></span> &nbsp;&nbsp; Finish</button>
    </form>
    </section>
  </div>
  <footer class="main-footer text-center">
    <strong>Copyright &copy; 2017 <a href="">Muhammad Sarimin</a> & <a href="#">Ade Putra NS</a>.</strong> All rights
    reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
  </div>
<?php include('script.php') ?>
</body>
</html>
