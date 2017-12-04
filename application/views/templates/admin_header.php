<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= asset_url('bootstrap/css/bootstrap.min.css') ?> ">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= asset_url('dist/css/AdminLTE.min.css') ?> ">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= asset_url('dist/css/skins/_all-skins.min.css') ?> ">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= asset_url('plugins/iCheck/flat/blue.css') ?> ">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?= asset_url('plugins/morris/morris.css') ?> ">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?= asset_url('plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?> ">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?= asset_url('plugins/datepicker/datepicker3.css') ?> ">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= asset_url('plugins/daterangepicker/daterangepicker.css') ?> ">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?= asset_url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?> ">

  <link rel="stylesheet" href="<?= asset_url('custom/css/common.css') ?> ">

  <link rel="stylesheet" href="<?= asset_url('plugins/formvalidation/css/validationEngine.jquery.css') ?>" type="text/css"/>

  <link rel="stylesheet" href="<?= asset_url('plugins/datatables/dataTables.bootstrap.css') ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <!-- jQuery 2.2.3 -->
  <script src="<?= asset_url('plugins/jQuery/jquery-2.2.3.min.js') ?> "></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?= asset_url('bootstrap/js/bootstrap.min.js') ?> "></script>
  <!-- jQuery Form Validation -->
  <script src="<?= asset_url('plugins/formvalidation/js/jquery.validationEngine-en.js') ?>" type="text/javascript" charset="utf-8"></script>
  <script src="<?= asset_url('plugins/formvalidation/js/jquery.validationEngine.js') ?>" type="text/javascript" charset="utf-8"></script>

  <script src="<?= asset_url('custom/js/common.js') ?> "></script>
  <!-- Morris.js charts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <!-- Sparkline -->
  <script src="<?= asset_url('plugins/sparkline/jquery.sparkline.min.js') ?> "></script>
  <!-- jvectormap -->
  <script src="<?= asset_url('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?> "></script>
  <script src="<?= asset_url('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?> "></script>
  <!-- jQuery Knob Chart -->
  <script src="<?= asset_url('plugins/knob/jquery.knob.js') ?> "></script>
  <!-- daterangepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
  <script src="<?= asset_url('plugins/daterangepicker/daterangepicker.js') ?> "></script>
  <!-- datepicker -->
  <script src="<?= asset_url('plugins/datepicker/bootstrap-datepicker.js') ?> "></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="<?= asset_url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?> "></script>
  <!-- Slimscroll -->
  <script src="<?= asset_url('plugins/slimScroll/jquery.slimscroll.min.js') ?> "></script>
  <!-- FastClick -->
  <script src="<?= asset_url('plugins/fastclick/fastclick.js') ?> "></script>
  <!-- AdminLTE App -->
  <script src="<?= asset_url('dist/js/app.min.js') ?> "></script>
  <!-- DataTables -->
  <script src="<?= asset_url('plugins/datatables/jquery.dataTables.min.js') ?>"></script>
  <script src="<?= asset_url('plugins/datatables/dataTables.bootstrap.min.js') ?>"></script>
  </head>
<body class = "<?= !empty($body_class) ? $body_class : 'hold-transition skin-blue sidebar-mini' ?>">
<div class="wrapper">

  <header class="main-header <?= !empty($hide_header) ? $hide_header : '' ?>">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>Panel</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= asset_url() ?>/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Super Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= asset_url() ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Super Admin
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?= site_url(ADMIN_PATH . '/dashboard/change_password') ?>" class="btn btn-default btn-flat">Change Password</a>
                </div>
                <div class="pull-right">
                  <a href="<?= site_url(ADMIN_PATH . '/dashboard/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>