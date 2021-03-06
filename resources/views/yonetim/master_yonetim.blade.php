<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> ISTE | BBS Yönetim Paneli</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Ionicons -->
    <link href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}" rel="stylesheet">
    <!-- Theme style -->
    
     <link href="{{ asset('dist/css/AdminLTE.min.css') }}" rel="stylesheet">

     <link href="{{ asset('css/icerigi_ikiye_bol.css') }}" rel="stylesheet">

    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
     <link href="{{ asset('dist/css/skins/skin-blue.min.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="http://localhost/Bologna_Bilgi_Sistemi/public/yonetim" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>BBS</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>BBS</b> Yönetim Paneli</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">



            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->


              <!-- mesajlaşma, bildirim ve support menuleri buradan çıkarıldı -->
             
              <!-- Tasks Menu -->
             
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="{{ URL::asset('dist/img/anonim-avatar.jpg') }}" class="user-image" alt="User Image"> </script>
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs"> Ali Arslan </span>
                </a>
                <ul class="dropdown-menu">

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profil</a>
                    </div>

                    <div class="col-xs-4 text-center">
                      <a target="_blank" href="http://localhost/Bologna_Bilgi_Sistemi/public/" class="btn btn-default btn-flat">Sayfayı Gör</a>
                    </div>

                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Çıkış Yap</a>
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

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="http://localhost/Bologna_Bilgi_Sistemi/public/yonetim"><i class="fa fa-link"></i> <span>Genel Bakış</span></a></li>
            <li><a href="http://localhost/Bologna_Bilgi_Sistemi/public/yonetim/icerik-tanimlari"><i class="fa fa-link"></i> <span>İçerik Tanımları</span></a></li>
            <li><a href="http://localhost/Bologna_Bilgi_Sistemi/public/yonetim/fakulte-tanimlari"><i class="fa fa-link"></i> <span>Fakülte Bologna Tanımları</span></a></li>
            <li><a href="http://localhost/Bologna_Bilgi_Sistemi/public/yonetim/ders-tanimlari"><i class="fa fa-link"></i> <span>Ders Bologna Tanımları</span></a></li>
            <li><a href="http://localhost/Bologna_Bilgi_Sistemi/public/yonetim/program-tanimlari"><i class="fa fa-link"></i> <span>Program Bologna Tanımları</span></a></li>
            <li><a href="http://localhost/Bologna_Bilgi_Sistemi/public/yonetim/ogrenim-ciktilari-ve-yetkileri"><i class="fa fa-link"></i> <span> Öğrenim Çıktıları ve Yetkileri</span></a></li>
            <li><a href="http://localhost/Bologna_Bilgi_Sistemi/public/yonetim/tycc-tanimlari"><i class="fa fa-link"></i> <span>TYÇÇ Genel Tanımları</span></a></li>
            <li><a href="http://localhost/Bologna_Bilgi_Sistemi/public/yonetim/bilgileri-kopyala"><i class="fa fa-link"></i> <span>Bologna Bilgileri Kopyala</span></a></li>
            <li><a href="http://localhost/Bologna_Bilgi_Sistemi/public/yonetim/web-islemleri"><i class="fa fa-link"></i> <span>Bologna Web İşlemleri</span></a></li>      
            
<!-- Burası daha sonradan açılacak :
            <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Link in level 2</a></li>
                <li><a href="#">Link in level 2</a></li>
              </ul>
            </li> -->
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           @yield('page_header')
            <small>@yield('sayfa_aciklamasi')</small>
          </h1>
        </section>

        <!-- Main content -->
          <section class="content">
          @yield('icerik_yonetim')

          <!-- Your Page Content Here -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
        Bologna Bilgi Sistemi Yönetim Paneli
        </div>
        <!-- Default to the left -->
        <strong>[2015-2016] </strong> - İskenderun Teknik Üniversitesi
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="{{ URL::asset('plugins/jQuery/jQuery-2.1.4.min.js') }}"> </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"> </script>
    <!-- AdminLTE App -->
    <script src="{{ URL::asset('dist/js/app.min.js') }}"> </script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
