<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <div class="float-right">
          <a href="/logout" class="btn btn-sm btn-danger">Log Out</a>
      </div>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/dashboard" class="brand-link elevation-4">
      <img src="/adminlte/img/ZX.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SIL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/adminlte/img/4.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info text-light">
          <span>{{auth()->user()->name}}</span>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      @if(auth()->user()->role == 'arsip')
          <li class="nav-item has-treeview">
            <a href="/data" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Pengarsipan
              </p>
            </a>
          </li>
      @endif

      @if(auth()->user()->role =='arsip')
          <li class="nav-item">
            <a href="/konfirmasi" class="nav-link">
              <i class="nav-icon fas fa-clipboard-check"></i>
              <p>Konfirmasi</p>
            </a>
          </li>
          @endif

      @if(auth()->user()->role =='admin')
          <li class="nav-item">
            <a href="/penduduk" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>Pendataan Penduduk</p>
            </a>
          </li>
      @endif

          @if(auth()->user()->role =='admin')
          <li class="nav-item">
            <a href="takun" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>Kelola Akun</p>
            </a>
          </li>
          @endif

          @if(auth()->user()->role =='cek')
          <li class="nav-item">
            <a href="ckonfirmasi" class="nav-link">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>Tambah Konfirmasi</p>
            </a>
          </li>
          @endif

          @if(auth()->user()->role =='admin' || auth()->user()->role =='cek' )
          <li class="nav-header">PENGECEKAN</li>
          <li class="nav-item">
            <a href="/ktp" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">KTP</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/kk" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>KK</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/akta" class="nav-link">
              <i class="nav-icon far fa-circle text-teal"></i>
              <p>AKTA</p>
            </a>
          </li>
          @endif
        </ul>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('container')
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Tugas Khusus</b> 2020
    </div>
    <strong>Muhammad Rizqi Samawa | 170602041 |</strong> Teknik Informatika
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/js/demo.js"></script>
</body>
</html>