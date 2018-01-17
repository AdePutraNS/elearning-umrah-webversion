<!DOCTYPE html>
<html>
<head>
  <title>SIPAA | Input Kartu Rencana Studi</title>
  <?php include('link.php') ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include('header.php') ?>
  <?php include('sidebar.php') ?>



<?php
echo form_open('mahasiswa/c_mahasiswa/krslihat');
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
                  <th>Hari</th>
                  <th>Jam</th>
                  <th>Kode Kelas</th>
                </tr>

                </thead>
                <div class="table-responsive">
                      <thead>
                                <?php
                                  $sks_tot=0;
                                    $n=0;
                                     $sks=0;
                                        foreach ($datas as $c){
                                          if($c->hari == 1){$hari = "Senin";}
                                          else if($c->hari == 2){$hari = "Selasa";}
                                          else if($c->hari == 3){$hari = "Rabu";}
                                          else if($c->hari == 4){$hari = "Kamis";}
                                          else if($c->hari == 5){$hari = "Jumat";}
                                          $n++; ?>
                                            <tr>
                                              <td><?php echo $c->kd_mk; ?></td>
                                              <td><?php echo $c->nama_mk; ?></td>
                                              <td><?php echo $c->sks; $sks_tot = $sks_tot + $c->sks;?></td>
                                              <td><?php echo $hari; ?></td>
                                              <td><?php echo $c->mulai; ?></td>
                                              <td><?php echo $c->kd_kls; ?></td>


                                <?php } ?>
                                <tr><td colspan='2' align='center'>Total SKS</td><td><?php echo $sks_tot; ?></td><td colspan=5></td></tr>
                      </thead>

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
