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
        <small>Daftar Kuis</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kuis</li>
      </ol>
    </section>



    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <div class="row">
                <div class="col-xs-4">
                  <h3 class="box-title">Daftar Kuis</h3>
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
                  <th>Jumlah Soal</th>
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
                    <?php
                    $username = $this->session->userdata('username');
                    $status = $this->db->query("select * from tb_ikut_kuis where tb_ikut_kuis.username='$username'")->num_rows();
                    if ($status!=0) {
                      echo "Anda Telah Mengikuti Kuis";
                    }else{?>
                      <a width="10px" href="<?php echo base_url()?>index.php/mahasiswa/c_mahasiswa/quis/?kd_kuis=<?php echo $materi->kd_kuis ?>" ><i class="glyphicon glyphicon-copy"></i>&nbsp;Ikuti Kuis</a>
                    <?php } ?>
                  </td>
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
