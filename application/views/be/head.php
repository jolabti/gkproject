<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GKII Grace Ministries Jakarta | Name Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/be/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/be/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/be/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/be/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/be/dist/css/skins/_all-skins.min.css">
  
  <!-- CK editor -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/ckeditor/skins/moono-lisa/editor.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/ckeditor/skins/moono-lisa/dialog.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?= site_url('welcome')?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Panel</b> GKII GMJ</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
           
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
              <span class="hidden-xs">Rosny Gonydjaja</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
                <li class="user-header">
                  <!-- <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
                  <p>
                    Rosny Gonydjaja
                    <small>Last Login 12:15 Am 20 February 2018</small>
                  </p>
                </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Messages</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Contacts</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Setting</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?= site_url('welcome/logout');?>" class="btn btn-default btn-flat">Sign out</a>
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

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <!-- <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
        </div>
        <div class="pull-left info">
          <p>Status</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li class="header">MAIN NAVIGATION</li>
        
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Profil</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?= site_url("welcome/panel/sejarah")?>"><i class="fa fa-circle-o"></i> Sejarah</a></li>
              <li><a href="<?= site_url("welcome/panel/visimisi")?>"><i class="fa fa-circle-o"></i> Visi & Misi</a></li>
              <li><a href="<?= site_url("welcome/panel/gerakan")?>"><i class="fa fa-circle-o"></i> 5 Gerakan</a></li>
              <li><a href="<?= site_url("welcome/panel/struktur")?>"><i class="fa fa-circle-o"></i> Struktur Organisasi</a></li>
            </ul>
          </li> 
          
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Seksi Pelayanan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?= site_url('welcome/panel/siepel-perkaria');?>"><i class="fa fa-circle-o"></i> Perkaria</a></li>
              <li><a href="<?= site_url('welcome/panel/siepel-perkauan');?>"><i class="fa fa-circle-o"></i> Perkauan</a></li>
              <li><a href="<?= site_url('welcome/panel/siepel-pemuda');?>"><i class="fa fa-circle-o"></i> Pemuda</a></li>
              <li><a href="<?= site_url('welcome/panel/siepel-anak-remaja');?>"><i class="fa fa-circle-o"></i> Anak & Remaja</a></li>
              <li><a href="<?= site_url('welcome/panel/siepel-tata-ibadah');?>"><i class="fa fa-circle-o"></i> Tata Ibadah</a></li>
              <li><a href="<?= site_url('welcome/panel/siepel-misi');?>"><i class="fa fa-circle-o"></i> Misi</a></li>
              <li><a href="<?= site_url('welcome/panel/siepel-doa');?>"><i class="fa fa-circle-o"></i> Doa</a></li>
              <li><a href="<?= site_url('welcome/panel/siepel-konseling');?>"><i class="fa fa-circle-o"></i> Konseling</a></li>
            </ul>
          </li>
          
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Jadwal Kegiatan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?= site_url("welcome/panel/ibadah")?>"><i class="fa fa-circle-o"></i> Ibadah Raya</a></li>
              <li><a href="<?= site_url("welcome/panel/dotungku")?>"><i class="fa fa-circle-o"></i> Doa Tungku</a></li>
              <li><a href="<?= site_url("welcome/panel/dopus")?>"><i class="fa fa-circle-o"></i> Doa Puasa</a></li>
              <li><a href="<?= site_url("welcome/panel/dosemalam")?>"><i class="fa fa-circle-o"></i> Doa Semalaman</a></li>
              <li><a href="<?= site_url("welcome/panel/dorantai")?>"><i class="fa fa-circle-o"></i> Doa Rantai</a></li>
              <li><a href="<?= site_url("welcome/panel/doling")?>"><i class="fa fa-circle-o"></i> Doa Keliling</a></li>
              <li><a href="<?= site_url("welcome/panel/mentoring")?>"><i class="fa fa-circle-o"></i> Mentoring</a></li>
              
            </ul>
          </li> 
          
          
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Informasi</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Warta Jemaat</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Kesaksian</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Renungan</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Perkunjungan</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Jaringan Doa</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Baptisan</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Penyerahan Anak</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Pernikahan</a></li>
              
            </ul>
          </li>

          

          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Lainnya</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Persembahan / Perpuluhan </a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Informasi Umum</a></li>
            </ul>
          </li>
          
          
          <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Dokumentasi Panel</span></a></li>
          <li class="header">LABELS</li>
          <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Berita Duka</span></a></li>
          <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Himbauan</span></a></li>
          <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Renungan Harian</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section> -->