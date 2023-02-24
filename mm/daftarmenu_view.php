<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Top Navigation</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- aos -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- css saya -->
  <link rel="stylesheet" href="../lp.css">
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <div class="container">
        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
        </div>
        <!-- Right navbar links -->
        <ul class="order-1 order-md-1 navbar-nav navbar-no-expand ml-auto">
          <li class="float-left">
            <a href="index3.html" class="navbar-brand">
              <img src="../img/logo.png" alt="SIREDIG" class="">
            </a>
          </li>
        </ul>
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <li class="nav-item NB">
            <a href="index.php" class="teks">List Pengguna</a>
          </li>
          <li class="nav-item NB">
            <a href="menu.php" class="teks">Tambah Pengguna</a>
          </li>
          <li class="nav-item NB">
            <a href="daftarmenu.php" class="teks">List Menu</a>
          </li>
          <li class="nav-item NB">
            <a href="menu.php" class="teks">Tambah Menu</a>
          </li>
          <li class="nav-item login ml-4">
            <a class="btn btn-sm masuk" href="../index.php" role="button">Keluar</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper daftarmenu">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-3 mt-3 justify-content-end">
            <div class="col">
              <h3>List Menu</h3>
            </div>
            <div class="col-auto">
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 175px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <a class="btn" href="menu.php"><i class="fa fa-plus mr-2" aria-hidden="true"></i>Tambah Menu</a>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content menu">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <!-- <div class="card border-top-0"> -->
              <!-- /.card-header -->
              <div class="table-responsive p-1">
                <table class="table table-hover table-borderless table-striped text-nowrap">
                  <thead>
                    <tr>
                      <div class="row">
                        <div class="col">
                          <th>Menu</th>
                        </div>
                        <div class="col">
                          <th>Nama</th>
                        </div>
                        <div class="col">
                          <th>Deskripsi</th>
                        </div>
                        <div class="col">
                          <th>Type</th>
                        </div>
                        <div class="col">
                          <th>Harga</th>
                        </div>
                        <div class="col">
                          <th>Stok</th>
                        </div>
                        <div class="col">
                          <th>Action</th>
                        </div>
                      </div>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><img src="../img/makanan1.png" alt=""></td>
                      <td class="menu">Pizza</td>
                      <td class="menu">Pizza ready setiap hari</td>
                      <td class="menu">Makanan</td>
                      <td class="menu">Rp30.000</td>
                      <td class="menu">10</td>
                      <td class="menu">
                        <button type="button" id="delete" class="btn btn-xs" onclick="">Delete</button>
                        <a href="menu.php" class="btn btn-xs">Edit</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
    <div class="card-footer">
      <p>Create By Techwiz</p>
    </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- sweetalert -->
  <script src="../js/sweetalert2.all.min.js"></script>
  <!-- tilt -->
  <script type="text/javascript" src="vanilla-tilt.min.js"></script>
  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- aos -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>
</body>

</html>