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
        TAMBAH KUIS
        <small>Input Soal Kuis</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="content">
      <form action="<?php echo base_url('index.php/dosen/c_dosen/simpan_kuis/');?>/?kd_kuis=<?php echo $kd_kuis ?>&kd_kls=<?php echo $kd_kls ?>&kd_mk=<?php echo $kd_mk?>&banyak_soal=<?php echo $banyak_soal ?>" role="form" enctype="multipart/form-data" method="post">
        <div class="form-group">
            <label>Mulai Quis</label>
            <input type="datetime-local" class="form-control" name="start">
        </div>
        <div class="form-group">
            <label>Selesai Quis</label>
            <input type="datetime-local" class="form-control" name="finish">
        </div>
      <?php
      $n = $banyak_soal;
      $i;
      for ($i=1; $i <= $n; $i++) { ?>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary collapsed-box">
            <div class="box-header">
              Input Soal Quis Nomor&nbsp;<?php echo $i ?>
              <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
              <i class="fa fa-plus"></i></button>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label>Soal&nbsp;<?php echo $i ?></label>
                    <textarea class="form-control border-hidden" rows="5" style="resize:none" placeholder="Masukkan Soal Quis..." name="soal_<?php echo $i ?>"></textarea>
                    <hr>
                    <p class="text-center"><b>Pilihan (options)</b></p>
                    <hr>
                    <div class="row">
                      <div class="col-xs-3">
                        <label>Pilihan A</label>
                            <input type="text" class="form-control" placeholder="Pilihan A ..." name="pila_<?php echo $i ?>">
                        </div>
                        <div class="col-xs-3">
                          <label>Pilihan B</label>
                            <input type="text" class="form-control"  placeholder="Pilihan B ..." name="pilb_<?php echo $i ?>">
                        </div>
                        <div class="col-xs-3">
                          <label>Pilihan C</label>
                            <input type="text" class="form-control"  placeholder="Pilihan C ..." name="pilc_<?php echo $i ?>">
                        </div>
                        <div class="col-xs-3">
                          <label>Pilihan D</label>
                            <input type="text" class="form-control"  placeholder="Pilihan D ..." name="pild_<?php echo $i ?>">
                        </div>
                        <div class="col-xs-3">
                          <label>Pilihan E</label>
                            <input type="text" class="form-control"  placeholder="Pilihan E ..." name="pile_<?php echo $i ?>">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12">
                          <hr style="margin-bottom:5px;">
                          <p class="text-center"><b>Kunci Jawaban</b></p>
                          <input type="text" class="form-control"  placeholder="Kunci Jawaban ..." name="kunci_jwb_<?php echo $i ?>">
                        </div>
                    </div>
                </div>
              <div class="box-footer">
                <div class="btn-group">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>

      <button type="submit" class="btn btn-default btn-sm"><span class="fa fa-mail-forward text-blue"></span> &nbsp;&nbsp; Simpan</button>
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
