<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Learning | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/iCheck/square/blue.css">


  <style media="screen">
  body{
    margin: 0;
    padding: 0;
    background: #fff;

    color: #fff;
    font-family: Arial;
    font-size: 12px;
    }

    .body{
    position: absolute;
    top: 0px;
    left: 0px;
    right: 0px;
    bottom: 0px;
    width: auto;
    height: auto;
    background-image: url("<?php echo base_url(); ?>dist/img/bgcolor.jpg");
    background-size: cover;
    z-index: 0;
    }
    .login input[type=text]{
    background: transparent;
    border: 1px solid rgba(0,0,0,0.1);
    border-radius: 2px;
    color: #22A7F0;
    font-family: 'Exo', sans-serif;
    font-size: 16px;
    font-weight: 400;
    padding: 8px;
    width: 100%;
    margin: 5px auto;
    }

    .login input[type=password]{
    background: transparent;
    border: 1px solid rgba(0,0,0,0.1);
    border-radius: 2px;
    color: #22A7F0;
    font-family: 'Exo', sans-serif;
    font-size: 16px;
    font-weight: 400;
    padding: 8px;
    width: 100%;margin: 5px auto;
    }
    .login input[type=text]:focus{
    outline: none;
    border: 1px solid rgba(34,167,240,0.5);
    }

    .login input[type=password]:focus{
    outline: none;
    border: 1px solid rgba(34,167,240,0.5);
    }
    ::-webkit-input-placeholder{
    color: rgba(108,122,137,0.6);
    }

    ::-moz-input-placeholder{
    color: rgba(108,122,137,0.6);
    }
  </style>
</head>

<body>



<body class="hold-transition login-page">
<div class="body">

<div class="content">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="box b-x-primary">
        <div class="box-header text-center">
          Masukkan Identitas Anda
        </div>
        <div class="box-body">
          <form action="<?php echo base_url('index.php/auth/simpan_register')?>" method="post">
            <div class="form-group has-feedback login">
              <input type='text' class='form-control' name='username' placeholder="username">
            </div>
            <div class="form-group has-feedback login">
              <input type='password' name='password' class='form-control' placeholder='password'>
            </div>
            <div class="form-group has-feedback login">
              <input type='email' class='form-control' name='email' placeholder="email@mail">
            </div>
            <div class="form-group has-feedback login">
              <input type='text' class='form-control' name='nama' placeholder="Nama Lengkap">
            </div>
            <div class="form-group has-feedback login">
              <input type='text' class='form-control' name='tagline' placeholder="tagline">
            </div>
            <div class="form-group has-feedback login">
              <input type='text' class='form-control' name='alamat' placeholder="alamat">
            </div>
            <div class="form-group has-feedback login">
              <input type='text' class='form-control' name='tempat_lahir' placeholder="Tempat Lahir">
            </div>
            <div class="form-group has-feedback login">
              <input type='date' class='form-control' name='tanggal_lahir' placeholder="Tanggal Lahir yyyy-mm-dd">
            </div>
            <div class="form-group has-feedback login">
              <input type='text' class='form-control' name='agama' placeholder="agama">
            </div>
            <div class="form-group has-feedback login">
              <input type='text' class='form-control' name='goldar' placeholder="golongan darah">
            </div>
            <div class="box-footer">
              <div class="col-xs-12">
                <button type='submit' name='submit' class="btn btn-primary btn-block btn-flat">Daftar</button>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>

<script src="<?php echo base_url(); ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<?php echo form_close(); ?>

</div>

</body>

</html>
