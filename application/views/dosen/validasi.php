<!DOCTYPE html>
<html>
<head>
<style>
input[type="file"]{display: none !important;}
</style>
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
        Mahasiswa
        <small>Setujui Permintaan Matakuliah</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Verifikasi</li>
      </ol>
    </section>



    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <div class="row">
                <div class="col-xs-4">
                  <h3 class="box-title">Daftar Permintaan Matakuliah</h3>
                </div>
                <div class="col-xs-4 col-xs-offset-4">
                  <div class="dropdown" style="width:100%;">
                    <ul class="dropdown-menu" style="width:100%;">
                      <li style="width:100%;" class="text-center"><a href="#">Pemogramman Web</a></li>
                      <li style="width:100%;" class="text-center"><a href="#">Analisa Berorientasi Objek</a></li>
                      <li style="width:100%;" class="text-center"><a href="#">probstat</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Mahasiswa</th>
                  <th>NIM</th>
                  <th>Matakuliah</th>
                  <th>Kelas</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                      $n=0;
                      foreach($data as $mhs){ $n++;
                  ?>
                <tr>
                  <td><?php echo $n; ?></td>
                  <td><?php echo $mhs->nama ?></td>
                  <td><?php echo $mhs->username ?></td>
                  <td><?php echo $mhs->nama_mk ?></td>
                  <td><?php echo $mhs->kd_kls ?></td>
                  <td><a class="btn btn-success" href="<?php echo base_url();?>index.php/dosen/c_dosen/validasi/?kd_mk=<?php echo $mhs->kd_mk?>&kd_kls=<?php echo $mhs->kd_kls?>&nim=<?php echo $mhs->username?>&nama_mk=<?php echo $mhs->nama_mk?>">Validasi</td></td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

                <!-- Modal -->
                <div id="tambah" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- konten modal-->
                        <div class="modal-content">
                        <form action="<?php echo base_url('index.php/dosen/c_dosen/tambah_materi');?>" role="form" enctype="multipart/form-data" method="post">
                            <!-- heading modal -->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Masukkan Data Materi</h4>
                            </div>
                            <!-- body modal -->
                            <div class="modal-body">

                            <div class="form-group">
                                <label>Nama Materi</label>
                                <input type="text" class="form-control" name="nama_materi" placeholder="Nama Materi ..." required="requaired">
                            </div>

                            <div class="form-group">
                                <label>Pertemuan</label>
                                <input type="text" class="form-control" name="pertemuan" placeholder="Pertemuan Ke ..." required="requaired">
                            </div>

                            <div class="form-group">
                              <label>Upload File Materi</label><br>
                              <label class="custom-file-upload btn btn-default">
                                  <input required="required" type="file" name="file_materi"/>
                                  Pilih File Tugas . . .
                              </label>
                              <button type="submit" class="btn btn-warning">Simpan</button>
                            </div>

                            <div class="form-group">
                                <label>Pilih Mata Kuliah</label>
                                <select class="form-control" name="kd_dosen">
                                  <?php foreach ($datas2 as $mk){ ?>
                                  <option value=<?php echo $mk->kd_mk; ?> ><?php echo $mk->nama_mk; ?> - <?php echo $mk->kd_kls; ?></option>
                                  <?php } ?>
                                </select>

                            </div>

                            </div>
                            <!-- footer modal -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>

                        </form>
                        </div>
                    </div>
                </div>
                <!-- Modal -->

    </section>
    <!-- /.content -->
  </div>

  <script type="text/javascript" language="JavaScript">
   function konfirmasi()
   {
   tanya = confirm("Anda Yakin Akan Menghapus Data ?");
   if (tanya == true) return true;
   else return false;
   }
   </script>

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
