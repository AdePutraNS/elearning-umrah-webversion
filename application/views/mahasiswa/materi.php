<!DOCTYPE html>
<html>
<head>
  <title>Elearning | Materi</title>
  <?php include('link.php') ?> <!-- ini link meta dan css -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include('header.php'); ?> <!-- manggil header (navbar nya) -->

  <?php include('sidebar.php'); ?>  <!-- manggil sidebar (menu kiri nya) -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bahan Ajar
        <small>Materi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Materi</li>
      </ol>
    </section>

    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <div class="row">
                <div class="col-xs-4">
                  <h3 class="box-title">Daftar Materi</h3>
                </div>
                <div class="col-md-5 pull-right">
                    <form action="<?=base_url()?>index.php/mahasiswa/c_mahasiswa/lihat_materi" method="post">
                      <div class="form-group">
                          <label>Pilih Mata Kuliah</label>

                          <select class="form-control" name="key" onchange="this.form.submit()">
                            <?php foreach ($mk as $mk2){ ?>
                            <option value=<?php echo $mk2->kd_mk; ?> ><?php echo $mk2->nama_mk; ?> - <?php echo $mk2->kd_kls; ?></option>
                            <?php } ?>
                          </select><br>


                      </div>
                    </form>
                  </div>
              </div>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Materi</th>
                  <th>Pertemuan</th>
                  <th>Nama Matakuliah</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $n=0; foreach ($datas as $d){ $n++;?>
                  <tr>
                    <td><?php echo $n ?></td>
                    <td><?php echo $d->nama_materi ?></td>
                    <td><?php echo $d->pertemuan ?></td>
                    <td><?php echo $d->nama_mk ?></td>
                    <td><a width="10px" href="<?php echo base_url()?>index.php/mahasiswa/c_mahasiswa/download_materi/?id=<?php echo $d->kd_materi ?>" ><i class="glyphicon glyphicon-download-alt"></i>&nbsp;Download Materi</a></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
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

</body>
</html>
