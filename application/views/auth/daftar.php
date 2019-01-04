<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>vapor EXPERT SYSTEM</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/font-awesome-4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/ionicons-2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition login-page">
    <div class="login-box">
            <div class="login-logo">
                <a href="<?php echo base_url(); ?>"><b>SISTEM PAKAR ONLINE</b> ONLINE</a>
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Silahkan daftar untuk bisa login</p>
                <?php
                echo form_open('auth/daftar');
                ?>
                <div class="form-group has-feedback">
                    <input class="form-control" type="text" name="username" placeholder="username">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input class="form-control" type="password" name="password" placeholder="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                <select name='jenis_kelamin' class="form-control" required>
                    <option value='0' selected>- Pilih Gender -</option>
                    <option value='L'>Laki-Laki</option>
                    <option value='P'>Perempuan</option>
                </select>
                </div>
                <div class="form-group has-feedback">
                    <input class="form-control" type="text" name="alamat" placeholder="Alamat">
                    <span class="glyphicon glyphicon-home form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input class="form-control" type="text" name="no_telp" placeholder="Nomor Telephon">
                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                </div>
                
                <div class="row">
                    <div class="col-xs-12">
                         <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit">Daftar</button>
                    </div><!-- /.col -->
                    </div>

</form>

         

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.4 -->
        <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>

