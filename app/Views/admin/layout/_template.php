<!DOCTYPE html>
<html lang="en">
<head>
    <!-- icon -->
    <!-- <link rel="icon" href="<?php echo base_url('assets/logo.png'); ?>"> -->
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/b1cc3697a1.js" crossorigin="anonymous"></script>

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url();?>/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url();?>/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url();?>/AdminLTE/plugins/jqvmap/jqvmap.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>/AdminLTE/dist-lte/css/adminlte.min.css">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url();?>/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url();?>/AdminLTE/plugins/daterangepicker/daterangepicker.css">

    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url();?>/AdminLTE/plugins/summernote/summernote-bs4.css">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/style-admin.css') ?>">

    <!-- Full Calender css -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('fullcalendar/fullcalendar.css') ?>">

    <!-- fulllcalender js -->
    
    <title><?php echo $title ?></title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <span class="d-none d-md-inline"><?php echo session('username'); ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- User image -->
                        <li class="user-header bg-primary">
                            <p>
                                <?php echo session('username'); ?>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <!-- <li class="user-body">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </div>
                        </li> -->
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <a href="<?php echo base_url('/profil-admin') ?>" class="btn btn-default btn-flat">Profile</a>
                            <a href="<?php echo base_url('/logout') ?>" class="btn btn-default btn-flat float-right">Sign out</a>
                        </li>
                    </ul>
                </li>
            </ul>

            
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo base_url('/admin') ?>" class="brand-link text-center">
                <span class="brand-text font-weight-light">Bioskopia</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?php echo base_url('/admin') ?>" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url('/data-film') ?>" class="nav-link">
                                <i class="nav-icon fas fa-film"></i>
                                <p>
                                    Film
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url('/data-genre') ?>" class="nav-link">
                                <i class="nav-icon fas fa-network-wired"></i>
                                <p>
                                    Genre
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url('/data-order') ?>" class="nav-link">
                                <i class="nav-icon fas fa-flag"></i>
                                <p>
                                    Order
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url('/data-user') ?>" class="nav-link">
                                <i class="nav-icon far fa-flag"></i>
                                <p>
                                    User
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
            
        <!-- content -->
        <?php $this->renderSection('content'); ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>/AdminLTE/plugins/jquery/jquery.min.js"></script>

    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url();?>/AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <script src="https://code.highcharts.com/highcharts.js"></script>

    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url();?>/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- ChartJS -->
    <script src="<?php echo base_url();?>/AdminLTE/plugins/chart.js/Chart.min.js"></script>

    <!-- Sparkline -->
    <script src="<?php echo base_url();?>/AdminLTE/plugins/sparklines/sparkline.js"></script>
    
    <!-- JQVMap -->
    <script src="<?php echo base_url();?>/AdminLTE/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url();?>/AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url();?>/AdminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>

    <!-- daterangepicker -->
    <script src="<?php echo base_url();?>/AdminLTE/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url();?>/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url();?>/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Summernote -->
    <script src="<?php echo base_url();?>/AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>

    <!-- overlayScrollbars -->
    <script src="<?php echo base_url();?>/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>/AdminLTE/dist-lte/js/adminlte.js"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url();?>/AdminLTE/dist-lte/js/pages/dashboard.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url();?>/AdminLTE/dist-lte/js/demo.js"></script>

    <!-- Datatables -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script src="//cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

    <script src="<?php echo base_url('fullcalendar/jquery-ui.min.js') ?>"></script>

    <script src="<?php echo base_url('fullcalendar/moment.min.js') ?>"></script>

    <script src="<?php echo base_url('fullcalendar/fullcalendar.min.js') ?>"></script>
</body>
</html>