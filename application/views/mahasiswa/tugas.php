<!DOCTYPE html>
<html>

<head>
    <title>Elearning | Tugas</title>
    <?php include('link.php') ?>
    <style>
        body.modal-open-noscroll {
            margin-right: 0!important;
            overflow: hidden;
        }

        .modal-open-noscroll .navbar-fixed-top,
        .modal-open .navbar-fixed-bottom {
            margin-right: 0!important;
        }
    </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include('header.php'); ?>
        <!-- manggil header (navbar nya) -->

        <?php include('sidebar.php'); ?>
        <!-- manggil sidebar (menu kiri nya) -->

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
                                <div class="col-xs-4">
                                    <h3 class="box-title">Daftar Tugas</h3>
                                </div>
                                <div class="col-xs-3 col-xs-offset-5">
                                    <button class="btn btn-primary dropdown-toggle" style="width:100%;" type="button" data-toggle="dropdown"> -- Pilih Mata Kuliah --
                <span class="fa fa-book pull-right"></span></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama Tugas</th>
                                            <th class="text-center">deadline</th>
                                            <th class="text-center">aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                    $n=0;
                    foreach ($datas as $tugas){ $n++; ?>

                                            <tr>
                                                <td class="text-center">
                                                    <?php echo $n; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $tugas->nama; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $tugas->deadline; ?>
                                                </td>
                                                <td>
                                                  <?php if($tugas->deadline <= date("Y-m-d H:i:s")){ ?>
                                                      <button class="btn btn-disabled disabled btn-sm pull-left"><span class="fa fa-cloud-upload text-blue"></span></button>
                                                  <?php } else{?>
                                                      <a href="<?php echo base_url()?>index.php/mahasiswa/c_mahasiswa/kirim_tugas/?kd_kls=<?php echo $tugas->kd_kls ?>&kd_mk=<?php echo $tugas->kd_mk ?>&kd_tugas=<?php echo $tugas->id ?>"><button type="button" class="btn btn-default btn-sm pull-left"><span class="fa fa-cloud-upload text-blue"></span></button></a>
                                                    <?php } ?>
                                                    <button type="button" class="btn btn-default btn-sm pull-right"><span class="fa fa-cloud-download text-blue"></span></button>
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



        <!-- /.content-wrapper -->
        <footer class="main-footer text-center">
            <strong>Copyright &copy; 2017 <a href="">Muhammad Sarimin</a> & <a href="">Ade Putra NS</a>.</strong> All rights reserved.
        </footer>
        <div class="control-sidebar-bg"></div>
    </div>


    <script type="text/javascript">
        function ambil(id_jadwal) {
            $.ajax({
                url: "http://localhost/sipaa/index.php/auth/datars/",
                data: "id_jadwal=" + id_jadwal,
                success: function(html) {
                    $("#hide" + id_jadwal).hide(300);
                }
            });

        }
    </script>
    <?php include('script.php') ?>
    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url(); ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url(); ?>plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url(); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url(); ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url(); ?>plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url(); ?>plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url(); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url(); ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url(); ?>dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
</body>

</html>
