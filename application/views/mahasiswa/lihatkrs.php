<!DOCTYPE html>
<html>
<head>

  <title>SIPAA | Input Kartu Rencana Studi</title>
  <?php include('link.php') ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include('header.php') ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include('sidebar.php') ?>



 <?php
echo form_open('auth/data_krs');
?>

<?php
echo form_hidden('id',$this->uri->segment(3));
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



<!--PEMBATASAN-->
    <!-- Main content -->
    <section class="content">
      <!-- COLOR PALETTE -->
     <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Lihat Kartu Rencana Studi</h3>
        </div>
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
                  <th>Status</th>
                </tr>

                </thead>
                <div class="table-responsive">
                      <thead>
                                <?php
                                  $sks_tot=0;
                                    $n=0;
                                     $sks=0;
                                        foreach ($data as $c){ $n++; ?>
                                            <tr>
                                              <td><?php echo $c->kd_mk; ?></td>
                                              <td><?php echo $c->nama_mk; ?></td>
                                              <td><?php echo $c->sks; $sks_tot = $sks_tot + $c->sks;?></td>
                                              <td><?php echo $c->hari; ?></td>
                                              <td><?php echo $c->mulai; ?></td>
                                              <td><?php echo $c->kd_kls; ?></td>
                                           <td>
                                             <?php if ($c->status == 1) { ?>
                                               Sudah Disetujui
                                             <?php } else{?>
                                               <a width="10px"><?php echo anchor('auth/deletekrs/'.$c->kd_mk, '<i class="glyphicon glyphicon-remove"></i> Cancel', array('class'=>'delete', 'onclick'=>"return konfirmasi();")); ?>
                                               </a>
                                             <?php } ?>
                                           </td>


                                <?php } ?>
                                <tr><td colspan='2' align='center'>Total SKS</td><td><?php echo $sks_tot; ?></td><td colspan=5></td></tr>
                      </thead>

                  </table>
            </div>
      </div>





<!-- KRS 2 -->
<section>
            <!-- COLOR PALETTE -->
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Input Kartu Rencana Studi</h3>
        </div>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Ambil</th>
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
                                    $n=0;
                                        foreach ($makuls as $c){?>
                                            <tr>
                                            <td>
                                           <a class="btn btn-primary" onclick='ambil($c->kd_mk)'  href="<?php echo base_url();?>index.php/auth/data_krs/?kd_mk=<?php echo $c->kd_mk;?>&kd_kls=<?php echo $c->kd_kls ?>">
                                           <i class="glyphicon glyphicon-download-alt"></i>
                                           </a>
                                            <td><?php echo $c->kd_mk; ?></td>
                                            <td><?php echo $c->nama_mk; ?></td>
                                            <td><?php echo $c->sks; ?></td>
                                            <td><?php echo $c->hari; ?></td>
                                            <td><?php echo $c->mulai; ?></td>
                                            <td><?php echo $c->kd_kls; ?></td>
                                            </tr>
                                <?php } ?>

                      </thead>

                  </table>
            </div>
      </div>
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

<script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Anda Yakin Akan Menghapus Data ?");
 if (tanya == true) return true;
 else return false;
 }
 </script>


<script type="text/javascript">

function ambil(id_jadwal)
{
    $.ajax({
  url:"http://localhost/sipaa/index.php/auth/datars/",
  data:"id_jadwal=" + id_jadwal,
  success: function(html)
  {
            $("#hide"+id_jadwal).hide(300);
  }
  });

}
</script>
<?php include('script.php') ?>
</body>
</html>
