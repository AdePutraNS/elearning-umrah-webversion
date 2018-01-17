<!DOCTYPE html>
<html>
<head>
  <title>SIPAA | Input Kartu Rencana Studi</title>
  <?php include('link.php') ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include('header.php') ?>
  <?php include('seidebar.php') ?>

 <?php
echo form_open('auth/data_krs');
?>

<?php
echo form_hidden('id',$this->uri->segment(4));
?>

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Rencana Studi
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="#">Rencana Studi</a></li>
        <li class="active">Input Data Rencana Studi</li>
      </ol>
    </section>


    <!-- Main content -->
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Kartu Rencana Studi</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>

                    <th>Kode Mk</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Dosen</th>
                    <th>Ruang</th>
                    <th>Jam</th>
                    <th>Semester</th>
                    <th>Aksi</th>
                </tr>

                </thead>


                <div class="table-responsive">
                                <thead>
                                <?php
                                    $n=0;
                                        foreach ($makul as $row){ $n++; ?>
                                          <tr>
                                          <td>
                                           <a class="btn btn-primary" heigh="3px"  href="<?php echo base_url();?>index.php/auth/data_krs/?pilih=<?php echo $row->id_jadwal;?>">
                            							 <i class="glyphicon glyphicon-download-alt"></i>
                							             </a>

                                          </td>


                                            <td><?php echo $row->makul_id; ?></td>
                                            <td><?php echo $row->nama_makul; ?></td>
                                            <td><?php echo $row->sks; ?></td>
                                            <td><?php echo $row->dosen; ?></td>
                                            <td><?php echo $row->ruang; ?></td>
                                            <td><?php echo $row->jam; ?></td>
                                            <td><?php echo $row->semester; ?></td>
                                            </tr>
                                <?php } ?>
                                </tbody>
                            </table>


                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>

</div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
</div>
<script type="text/javascript">

function ambil(jadwal_id,mahasiswa_id)
{
    $.ajax({
  url:"<?php echo base_url();?>krs/post",
  data:"jadwal_id=" + jadwal_id+"&mahasiswa_id="+mahasiswa_id ,
  success: function(html)
  {
            $("#hide"+jadwal_id).hide(300);
  }
  });

}

</script>

<?php include('script.php') ?>
</body>
</html>
