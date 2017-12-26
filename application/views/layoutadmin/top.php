<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Eufloria | Administrator</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/style-admin.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
  
  <!-- font awesome-->
  <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/tinymce/bootstrap3-wysihtml5.min.css">
    <!--pavicon - text editor -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>resource/favicon.ico" type="image/x-icon" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="shortcut icon" href="<?php echo base_url() ?>resource/images/icon.png">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>FL</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Eufloria</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <?php 
                $user=$this->session->userdata('nama_users');
              ?>
              <span class="hidden-xs"><?php echo $user?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $user?> - Web Administrator
                </p>
              </li>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <?php 
                    $id_user=$this->session->userdata('id_users');
                  ?>
                  <?php echo anchor('users/lihat/' .$id_user, 'Profil', ['class' => 'btn btn-default btn-flat']); ?>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url() ?>index.php/logout" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview"><a href="<?php echo base_url() ?>index.php/home"><i class="fa fa-dashboard"></i> <span>Dasboard</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-tags"></i>
            <span>Kategori Produk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><?php echo anchor('kategori','<i class="fa fa-circle-o"></i> Semua Kategori')?></li>
            <li><?php echo anchor('kategori/tambah','<i class="fa fa-circle-o"></i> Tambah Kategori')?></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dropbox"></i>
            <span>Produk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><?php echo anchor('produk','<i class="fa fa-circle-o"></i> Semua Produk')?></li>
            <li><?php echo anchor('produk/tambah','<i class="fa fa-circle-o"></i> Tambah Produk')?></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text"></i>
            <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><?php echo anchor('blog','<i class="fa fa-circle-o"></i> Semua Artikel')?></li>
            <li><?php echo anchor('blog/tambah','<i class="fa fa-circle-o"></i> Tambah Artikel')?></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-picture-o"></i>
            <span>Slider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><?php echo anchor('slider','<i class="fa fa-circle-o"></i> Semua Slider')?></li>
            <li><?php echo anchor('slider/tambah','<i class="fa fa-circle-o"></i> Tambah Slider')?></li>
          </ul>
        </li>
         <li class="treeview"><?php echo anchor('produk/promo','<i class="fa fa-bullhorn"></i><span> Promo </span>')?></li>
        <li class="treeview"><?php echo anchor('users/all_customer','<i class="fa fa-users"></i><span> Customers </span>')?></li>
        <li class="treeview"><a href="<?php echo base_url() ?>index.php/setting"><i class="fa fa-cog"></i> <span>Pengaturan </span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  