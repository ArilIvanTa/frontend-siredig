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
  <!-- css saya -->
  <link rel="stylesheet" href="../style.css">
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <div class="container">
        <a href="index3.html" class="navbar-brand">
          <img src="img/logos.png" alt="SIREDIG" class="brand-image">
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
        </div>
        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <li class="nav-item NB">
            <a href="landingpage.php" class="teks">Beranda</a>
          </li>
          <li class="nav-item NB">
            <a href="menu.php" class="teks">Menu</a>
          </li>
          <li class="nav-item dropdown NB">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="teks dropdown-toggle">User</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow bawah">
              <!-- Level two dropdown-->
              <li><a href="daftarpengguna.php" class="dropdown-item">Daftar Pengguna</a></li>
              <li><a href="daftarmenu.php" class="dropdown-item">Daftar Menu</a></li>
              <!-- End Level two -->
            </ul>
          </li>
          <li class="nav-item login ml-4">
            <a class="btn btn-sm masuk" href="masuk.php" role="button">Masuk</a>
          </li>
          <li class="nav-item login ml-2">
            <a class="btn btn-sm daftar masuk" href="daftar.php" role="button">Daftar</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /.navbar -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-3 mt-3 justify-content-end">
            <div class="col">
              <h3>Form User</h3>
            </div>
            <div class="col-auto">
              <a class="btn" href="index.php"><button type="button" class="btn btn-block btn-sm"><i class="fa fa-list" aria-hidden="true"></i>List User</button></a>
            </div>
          </div>

        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container">
          <div class="">
            <!-- /.card-header -->
            <div class="card-body formuser">
              <form>
                <div class="row">
                  <div class="col-sm-4 asik">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Id</label>
                      <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                  </div>
                  <div class="col-sm-4 asik">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                  </div>
                  <div class="col-sm-4 ">
                    <!-- radio -->
                    <div class="form-group">
                      <label>Gender</label>
                      <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="radio1">
                        <label class="form-check-label mr-4">Laki-Laki</label>
                        <input class="form-check-input" type="radio" name="radio1" checked>
                        <label class="form-check-label">Perempuan</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6 asik">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Gmail</label>
                      <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                  </div>
                  <div class="col-sm-6 asik">
                    <div class="form-group">
                      <label>Telephone</label>
                      <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6 asik">
                    <div class="form-group">
                      <label>Address</label>
                      <textarea class="form-control" rows="2" placeholder="Enter ..."></textarea>
                    </div>
                  </div>
                  <div class="col-sm-6 asik">
                    <div class="form-group">
                      <label>Status</label>
                      <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                  </div>
                </div>
                <div class="row tombolform">
                  <div class="col-sm-1">
                    <td>
                      <a href="" class="btn btn-success btn-sm">Tambah</a>
                    </td>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
</body>

</html>