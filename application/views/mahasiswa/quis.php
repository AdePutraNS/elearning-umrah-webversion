<!DOCTYPE html>
<html>

<head>
    <title>Elearning | Materi</title>
    <?php include('link.php') ?>
    <style media="screen">
        .funkyradio div {
            clear: both;
            overflow: hidden;
        }

        .funkyradio label {
            width: 100%;
            border-radius: 3px;
            border: 1px solid #D1D3D4;
            font-weight: normal;
        }

        .funkyradio input[type="radio"]:empty,
        .funkyradio input[type="checkbox"]:empty {
            display: none;
        }

        .funkyradio input[type="radio"]:empty~label,
        .funkyradio input[type="checkbox"]:empty~label {
            position: relative;
            line-height: 2.5em;
            text-indent: 3.25em;
            margin-top: 2em;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .funkyradio input[type="radio"]:empty~label:before,
        .funkyradio input[type="checkbox"]:empty~label:before {
            position: absolute;
            display: block;
            top: 0;
            bottom: 0;
            left: 0;
            content: '';
            width: 2.5em;
            background: #D1D3D4;
            border-radius: 3px 0 0 3px;
        }

        .funkyradio input[type="radio"]:hover:not(:checked)~label,
        .funkyradio input[type="checkbox"]:hover:not(:checked)~label {
            color: #888;
        }

        .funkyradio input[type="radio"]:hover:not(:checked)~label:before,
        .funkyradio input[type="checkbox"]:hover:not(:checked)~label:before {
            content: '\2714';
            text-indent: .9em;
            color: #C2C2C2;
        }

        .funkyradio input[type="radio"]:checked~label,
        .funkyradio input[type="checkbox"]:checked~label {
            color: #777;
        }

        .funkyradio input[type="radio"]:checked~label:before,
        .funkyradio input[type="checkbox"]:checked~label:before {
            content: '\2714';
            text-indent: .9em;
            color: #333;
            background-color: #ccc;
        }

        .funkyradio input[type="radio"]:focus~label:before,
        .funkyradio input[type="checkbox"]:focus~label:before {
            box-shadow: 0 0 0 3px #999;
        }

        .funkyradio-default input[type="radio"]:checked~label:before,
        .funkyradio-default input[type="checkbox"]:checked~label:before {
            color: #333;
            background-color: #ccc;
        }

        .funkyradio-primary input[type="radio"]:checked~label:before,
        .funkyradio-primary input[type="checkbox"]:checked~label:before {
            color: #fff;
            background-color: #337ab7;
        }

        .funkyradio-success input[type="radio"]:checked~label:before,
        .funkyradio-success input[type="checkbox"]:checked~label:before {
            color: #fff;
            background-color: #5cb85c;
        }

        .funkyradio-danger input[type="radio"]:checked~label:before,
        .funkyradio-danger input[type="checkbox"]:checked~label:before {
            color: #fff;
            background-color: #d9534f;
        }

        .funkyradio-warning input[type="radio"]:checked~label:before,
        .funkyradio-warning input[type="checkbox"]:checked~label:before {
            color: #fff;
            background-color: #f0ad4e;
        }

        .funkyradio-info input[type="radio"]:checked~label:before,
        .funkyradio-info input[type="checkbox"]:checked~label:before {
            color: #fff;
            background-color: #5bc0de;
        }

        .page a {
            margin: auto 5px !important;
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
                    <small>Quis</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Quis</li>
                </ol>
            </section>



            <section class="content">

                <div class="row">
                    <div class="col-md-12">
                        <?php $kd_kuis = $_GET['kd_kuis']; ?>
                        <form action="<?php echo base_url('index.php/mahasiswa/c_mahasiswa/simpan_kuis/');?>/?kd_kuis=<?php echo $kd_kuis ?>" role="form" enctype="multipart/form-data" method="post">
                            <?php
              $n=0;
              foreach($data_soal as $s){ $n++;?>
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <p class="text-center">Kuis Matakuliah
                                            <?php foreach ($nama_mk as $key) {echo $key->nama_mk;echo " - Kelas ";echo $key->kd_kls;} ?>
                                        </p>
                                    </div>

                                    <div class="box-body">
                                        <div class="callout callout-info">
                                            <p>Soal Nomor <strong><?php echo $n; ?></strong></p>

                                        </div>

                                        <P>
                                            <?php echo $s->soal; ?>
                                        </p>
                                        <strong>Jawaban : </strong>
                                        <div class="funkyradio">
                                            <div class="funkyradio-primary">
                                                <input type="radio" value="<?php echo $s->pila; ?>" name="pilihan<?php echo $n; ?>" id="radio_<?php echo $n; ?>_1" />
                                                <label for="radio_<?php echo $n; ?>_1"><?php echo $s->pila; ?></label>
                                            </div>
                                            <div class="funkyradio-primary">
                                                <input type="radio" value="<?php echo $s->pilb; ?>" name="pilihan<?php echo $n; ?>" id="radio_<?php echo $n; ?>_2" />
                                                <label for="radio_<?php echo $n; ?>_2"><?php echo $s->pilb; ?></label>
                                            </div>
                                            <div class="funkyradio-primary">
                                                <input type="radio" value="<?php echo $s->pilc; ?>" name="pilihan<?php echo $n; ?>" id="radio_<?php echo $n; ?>_3" />
                                                <label for="radio_<?php echo $n; ?>_3"><?php echo $s->pilc; ?></label>
                                            </div>
                                            <div class="funkyradio-primary">
                                                <input type="radio" value="<?php echo $s->pild; ?>" name="pilihan<?php echo $n; ?>" id="radio_<?php echo $n; ?>_4" />
                                                <label for="radio_<?php echo $n; ?>_4"><?php echo $s->pild; ?></label>
                                            </div>
                                            <div class="funkyradio-primary">
                                                <input type="radio" value="<?php echo $s->pile; ?>" name="pilihan<?php echo $n; ?>" id="radio_<?php echo $n; ?>_5" />
                                                <label for="radio_<?php echo $n; ?>_5"><?php echo $s->pile; ?></label>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <?php } ?>
                                <button type="submit" class="btn btn-default btn-sm"><span class="fa fa-mail-forward text-blue"></span> &nbsp;&nbsp; Simpan</button>
                        </form>
                    </div>
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

    <?php include('script.php') ?>

</body>

</html>
