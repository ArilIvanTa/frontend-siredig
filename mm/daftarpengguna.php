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
              <h3>List User</h3>
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
              <a class="btn" href="formuser.php"><button type="button" class="btn btn-block btn-sm"><i class="fa fa-plus" aria-hidden="true"></i>Tambah User</button></a>
            </div>
          </div>

        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
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
                          <th>Id</th>
                        </div>
                        <div class="col">
                          <th>Username</th>
                        </div>
                        <div class="col">
                          <th>Gender</th>
                        </div>
                        <div class="col">
                          <th>Gmail</th>
                        </div>
                        <div class="col">
                          <th>Telephone</th>
                        </div>
                        <div class="col">
                          <th>Address</th>
                        </div>
                        <div class="col">
                          <th>Status</th>
                        </div>
                        <div class="col">
                          <th>Action</th>
                        </div>
                      </div>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>3121</td>
                      <td>Aril Ivan Ta</td>
                      <td>Laki-Laki</td>
                      <td>ivanta788@gmail.com</td>
                      <td>081231274695</td>
                      <td>Bangsri Jepara</td>
                      <td>Customer</td>
                      <td>
                        <a href=""><button type="button" class="btn bg-danger btn-xs mr-2"><i class="fas fa-trash"></i>Delete</button></a>
                        <a href="listuseredit.php"><button type="button" class="btn bg-success btn-xs"><i class="fas fa-edit"></i>Edit</button></a>
                      </td>
                    </tr>
                    <tr>
                      <td>3121</td>
                      <td>Aril Ivan Ta</td>
                      <td>Laki-Laki</td>
                      <td>ivanta788@gmail.com</td>
                      <td>081231274695</td>
                      <td>Bangsri Jepara</td>
                      <td>Customer</td>
                      <td>
                        <a href=""><button type="button" class="btn bg-danger btn-xs mr-2"><i class="fas fa-trash"></i>Delete</button></a>
                        <a href="listuseredit.php"><button type="button" class="btn bg-success btn-xs"><i class="fas fa-edit"></i>Edit</button></a>
                      </td>
                    </tr>
                    <tr>
                      <td>3121</td>
                      <td>Aril Ivan Ta</td>
                      <td>Laki-Laki</td>
                      <td>ivanta788@gmail.com</td>
                      <td>081231274695</td>
                      <td>Bangsri Jepara</td>
                      <td>Customer</td>
                      <td>
                        <a href=""><button type="button" class="btn bg-danger btn-xs mr-2"><i class="fas fa-trash"></i>Delete</button></a>
                        <a href="listuseredit.php"><button type="button" class="btn bg-success btn-xs"><i class="fas fa-edit"></i>Edit</button></a>
                      </td>
                    </tr>
                    <tr>
                      <td>3121</td>
                      <td>Aril Ivan Ta</td>
                      <td>Laki-Laki</td>
                      <td>ivanta788@gmail.com</td>
                      <td>081231274695</td>
                      <td>Bangsri Jepara</td>
                      <td>Customer</td>
                      <td>
                        <a href=""><button type="button" class="btn bg-danger btn-xs mr-2"><i class="fas fa-trash"></i>Delete</button></a>
                        <a href="listuseredit.php"><button type="button" class="btn bg-success btn-xs"><i class="fas fa-edit"></i>Edit</button></a>
                      </td>
                    </tr>
                    <tr>
                      <td>3121</td>
                      <td>Aril Ivan Ta</td>
                      <td>Laki-Laki</td>
                      <td>ivanta788@gmail.com</td>
                      <td>081231274695</td>
                      <td>Bangsri Jepara</td>
                      <td>Customer</td>
                      <td>
                        <a href=""><button type="button" class="btn bg-danger btn-xs mr-2"><i class="fas fa-trash"></i>Delete</button></a>
                        <a href="listuseredit.php"><button type="button" class="btn bg-success btn-xs"><i class="fas fa-edit"></i>Edit</button></a>
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