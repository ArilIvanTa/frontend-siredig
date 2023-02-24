<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AdminLTE 3 | Top Navigation</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- aos -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- css saya -->
  <link rel="stylesheet" href="lp.css">
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <div class="container" data-aos="fade-up">
        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
        </div>
        <!-- Right navbar links -->
        <ul class="order-1 order-md-1 navbar-nav navbar-no-expand ml-auto">
          <li class="float-left">
            <a href="index.php" class="navbar-brand">
              <img src="img/logo.png" alt="SIREDIG" class="">
            </a>
          </li>
        </ul>
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <li class="nav-item NB">
            <a href="index.php" class="teks">Beranda</a>
          </li>
          <li class="nav-item NB">
            <a href="menu.php" class="teks">Menu</a>
          </li>
          <li class="nav-item NB">
            <a href="order.php" class="teks">Order</a>
          </li>
          <li class="nav-item login ml-4">
            <a class="btn btn-sm masuk" href="masuk.php" role="button">Masuk</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper kepala">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="jumbotron" data-aos="fade-right" data-aos-duration="500">
                <h1 class="display-4">SIREDIG</h1>
                <p class="lead">Kurus atau gendut adalah pilihan tapi makan enak adalah kebutuhan</p>
                <a class="btn btn-sm" href="menu.php" role="button">Menu</a>
              </div>
            </div>
            <div class="col foto" data-aos="fade-left" data-aos-duration="500">
              <img src="img/makanan1.png" alt="">
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">

        <div class="row row-cols-3 makanan">
          <div class="col-10">
            <h2>Paling Populer</h2>
            <p>Berikut adalah menu makanan paling populer dari resto kami</p>
          </div>
          <div class="col" data-tilt>
            <div class="card" data-aos="flip-left" data-aos-duration="1000" style="width: 23rem;">
              <img src="img/makanan3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Sate Padang</h5>
                <p class="card-text">Rp20.000</p>
                <a href="menu.php" class="btn">View Produk</a>
              </div>
            </div>
          </div>
          <div class="col" data-tilt>
            <div class="card" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="100" style="width: 23rem;">
              <img src="img/makanan3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Sate Padang</h5>
                <p class="card-text">Rp20.000</p>
                <a href="menu.php" class="btn">View Produk</a>
              </div>
            </div>
          </div>
          <div class="col" data-tilt>
            <div class="card" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200" style="width: 23rem;">
              <img src="img/makanan3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Sate Padang</h5>
                <p class="card-text">Rp20.000</p>
                <a href="menu.php" class="btn">View Produk</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row rows-col-6 makanan2">
          <div class="col" data-tilt>
            <div class="card" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="300" style="width: 13.1rem;">
              <img src="img/burger.png" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="menu.php">Burger</a>
                <p class="card-text">Rp20.000</p>
              </div>
            </div>
          </div>
          <div class="col" data-tilt>
            <div class="card" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="400" style="width: 13.1rem;">
              <img src="img/burger.png" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="menu.php">Burger</a>
                <p class="card-text">Rp20.000</p>
              </div>
            </div>
          </div>
          <div class="col" data-tilt>
            <div class="card" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="500" style="width: 13.1rem;">
              <img src="img/burger.png" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="menu.php">Burger</a>
                <p class="card-text">Rp20.000</p>
              </div>
            </div>
          </div>
          <div class="col" data-tilt>
            <div class="card" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="600" style="width: 13.1rem;">
              <img src="img/burger.png" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="menu.php">Burger</a>
                <p class="card-text">Rp20.000</p>
              </div>
            </div>
          </div>
          <div class="col" data-tilt>
            <div class="card" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="700" style="width: 13.1rem;">
              <img src="img/burger.png" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="menu.php">Burger</a>
                <p class="card-text">Rp20.000</p>
              </div>
            </div>
          </div>
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

  <!-- REQUIRED SCRIPTS -->
  <!-- tilt -->
  <script type="text/javascript" src="vanilla-tilt.min.js"></script>
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- aos -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
</body>

</html>