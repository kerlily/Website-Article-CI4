<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendataan Magang</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url() ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url() ?>dist/css/adminlte.min.css">
  </head>
  <body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
      

        <!-- Messages Dropdown Menu -->
      
          
              <!-- Message End -->
        
          
        <!-- Notifications Dropdown Menu -->
      
        
      
            </a>
          
            </a>
            
        </li>
        
        <li class="nav-item">
        
           
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?=base_url('/magang/home') ?>" class="brand-link">
      
        <span class="ml-5"> Administrator</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
      
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-header">MENU NAVIGASI</li>
              <li class="nav-item">
                  <a href="<?= site_url('/magang/datamhsview') ?>" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p class="text">Data Mahasiswa</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                  <i class="nav-icon far fa-user"></i>
                  <p class="text">Pengunjung</p>
                  </a>
              </li>
              <li class="nav-item">
              <a href="#" class="nav-link" onclick="window.print();">
    <i class="nav-icon fas fa-print"></i>
    <p class="text">Laporan</p>
</a>

              </li>
              <li class="nav-item">
                  <a  class="nav-link">
                  <i class="nav-icon fas fa-chart-bar"></i>
                  <p class="text">Grafik</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a  class="nav-link">
                  <i class="nav-icon far fa-user"></i>
                  <p class="text">Ganti password</p>
                  </a>
              </li>
              <li class="nav-item">
              <a href="<?= site_url('/login') ?>" class="nav-link">
                  <i class="fas fa-sign-out-alt"></i>
                  <p class="text">Logout</p>
                  </a>
              </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>
              <div class="text-center">
    <?= $this->renderSection('judul') ?>
</div>

              </h1>
            </div>
            
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="card">
              <div class="card-header">
                  <h3 class="card-title">
                      <?= $this->renderSection('subjudul') ?>
                  </h3>
              </div>
              <div class="card-body">
                  <?= $this->renderSection('isi') ?>
              </div>
          </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
      </div>
      <strong>Copyright &copy;</strong> Muhammad Farhan
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?=base_url() ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?=base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?=base_url() ?>dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?=base_url() ?>dist/js/demo.js"></script>
  
  </body>
  </html>
