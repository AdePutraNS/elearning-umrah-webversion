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
        <small>Tugas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tugas</li>
      </ol>
    </section>



    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <div class="row">
                <div class="col-xs-4">
                  <h3 class="box-title">Daftar Tugas</h3>
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
                  <th>Nama Matakuliah</th>
                  <th>Kelas</th>
                  <th>Kode Kuis</th>
                  <th>Banyak Soal</th>
                  <th>Mulai</th>
                  <th>Selesai</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                      $n=0;
                      foreach ($data1 as $materi){ $n++;
                  ?>
                <tr>
                  <td><?php echo $n; ?></td>
                  <td><?php echo $materi->nama_mk ?></td>
                  <td><?php echo $materi->kd_kls ?></td>
                  <td><?php echo $materi->kd_kuis ?></td>
                  <td><?php echo $materi->banyak_soal ?></td>
                  <td><?php echo $materi->start ?></td>
                  <td><?php echo $materi->finish ?></td>
                  <td class="text-center">
                      <a width="10px"><?php echo anchor('dosen/c_dosen/delete_kuis/'.$materi->kd_kuis, '<i class="glyphicon glyphicon-remove"></i>Batalkan Kuis', array('class'=>'delete', 'onclick'=>"return konfirmasi();")); ?></a>&nbsp;&nbsp;
                      <a width="10px" href="<?php echo base_url()?>index.php/dosen/c_dosen/monit_kuis/?kd_kuis=<?php echo $materi->kd_kuis ?>" ><i class="glyphicon glyphicon-list-alt"></i>&nbsp;Monitoring Kuis</a>
                  </td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
              <div class="box-footer">
                <div class="pull-right">
                  <button data-toggle="modal" data-target="#tambah" type="button" class="btn btn-primary btn-sm">Buat Quis</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

                <!-- Modal -->
                <div id="tambah" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- konten modal-->
                        <div class="modal-content">
                        <form action="<?php echo base_url('index.php/dosen/c_dosen/set_info_kuis');?>" role="form" enctype="multipart/form-data" method="post">
                            <!-- heading modal -->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Masukkan Data Quis Baru</h4>
                            </div>
                            <!-- body modal -->
                            <div class="modal-body">

                            <div class="form-group">
                              <label>Banyak Soal</label><br>
                              <input type="number" style="margin-top:10px;" name="banyak_soal" placeholder="Banyaknya Soal">
                            </div>


                            <div class="form-group">
                                <label>Pilih Mata Kuliah</label>
                                <select class="form-control" name="kd_mk">
                                  <?php
                                      foreach ($datas2 as $mk){

                                  ?>

                                  <option value="<?php echo $mk->kd_mk; ?>_<?php echo $mk->kd_kls; ?>" ><?php echo $mk->nama_mk; ?> - <?php echo $mk->kd_kls; ?></option>
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

   <script type="text/javascript" language="JavaScript">
   $(document).ready(function(){
     $('.datepicker-me').datepicker({
       format : 'dd-mm-yyyy',
     });
   });
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
