<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VAPOR EXPERT SYSTEM</title>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url()?>assets/images/squen_logo.png"/>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/font-awesome-4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <!--<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/ionicons-2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>S</b>ES</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Sikarnas</b>ES</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">


       
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Alexander Pierce</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
             <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU ADMIN</li>
           
            <li>
              <?php echo anchor('dashboard_admin','<i class="fa fa-laptop"></i> <span>DASHBOARD</span>
                <small class="label pull-right bg-red">3</small>'); ?>
            </li>
            <li>
                <?php echo anchor('kerusakan','<i class="fa fa-heartbeat"></i> <span>KERUSAKAN</span>
                <small class="label pull-right bg-red">3</small>'); ?>
            </li>
            <li>
                <?php echo anchor('saran','<i class="fa fa-medkit"></i> <span>SARAN</span>
                <small class="label pull-right bg-red">3</small>'); ?>
            </li>
            <li>
                <?php echo anchor('gejala','<i class="fa fa-stethoscope"></i> <span>GEJALA</span>
                <small class="label pull-right bg-red">3</small>'); ?>
            </li>

            <li>
                <?php echo anchor('rule','<i class="fa fa-wrench"></i> <span>RULE</span>
                <small class="label pull-right bg-red">3</small>'); ?>
            </li>
            <li>
                <?php echo anchor('baca_pesan','<i class="fa fa-envelope"></i> <span>PESAN</span>
                <small class="label pull-right bg-red">3</small>'); ?>
            </li>
            <li>
                <?php echo anchor('user','<i class="fa fa-users"></i> <span>USER</span>
                <small class="label pull-right bg-red">3</small>'); ?>
            </li>
            
            <li>
                <?php echo anchor('riwayat_admin','<i class="fa fa-safari"></i> <span>RIWAYAT</span>
                <small class="label pull-right bg-red">3</small>'); ?>
            </li>
                      
             <li>
                 <?php echo anchor('auth/logout','<i class="fa fa-sign-out"></i> <span>LOGOUT</span>
                <small class="label pull-right bg-red">3</small>'); ?>
            </li>
            <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU USER</li>
            <li>
              <?php echo anchor('dashboard_user','<i class="fa fa-laptop"></i> <span>DASHBOARD</span>
                <small class="label pull-right bg-red">3</small>'); ?>
            </li>
            <li>
                <?php echo anchor('diagnosa','<i class="fa fa-stethoscope"></i> <span>DIAGNOSA</span>
                <small class="label pull-right bg-red">3</small>'); ?>
            </li>
            <li>
                <?php echo anchor('saran_kerusakan','<i class="fa fa-medkit"></i> <span>SARAN KERUSAKAN</span>
                <small class="label pull-right bg-red">3</small>'); ?>
            </li>
            <li>
                <?php echo anchor('pesan','<i class="fa fa-envelope"></i> <span>PESAN</span>
                <small class="label pull-right bg-red">3</small>'); ?>
            </li>
            <li>
                <?php echo anchor('riwayat','<i class="fa fa-safari"></i> <span>RIWAYAT</span>
                <small class="label pull-right bg-red">3</small>'); ?>
            </li>
   
             <li>
                 <?php echo anchor('auth/logout','<i class="fa fa-sign-out"></i> <span>LOGOUT</span>
                <small class="label pull-right bg-red">3</small>'); ?>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Tables
            <small>advanced tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>
        </section>


<?php
//include 'content.php';
echo $contents;
?>



      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy 2016 - Sikarnas Expert Sistem - All Right Reserved
      </footer>

      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url()?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url()?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url()?>assets/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url()?>assets/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>