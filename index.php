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
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- aos -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- css saya -->
  <link rel="stylesheet" href="user/siredig.css">
  <!-- script saya -->
  <script src="script.js"></script>
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">


    <!-- Navbar -->
    <nav class="main-header navbar sticky-top navbar-expand-md navbar-light navbar-white">
      <div class="container">
        <a href="#" class="navbar-brand">
          <img src="img/loogo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">

          <!-- Right navbar links -->
          <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="index.php" class="bar">Beranda</a>
              </li>
              <li class="nav-item">
                <a href="user/menu.php" class="bar">Menu</a>
              </li>
              <li class="nav-item">
                <a href="user/order.php" class="bar">Order</a>
              </li>
              <li class="nav-item">
                <a href="user/pesanan.php" class="bar">Pesanan</a>
              </li>
              <li class="nav-item">
                <a href="user/masuk.php" class="bar">Masuk</a>
              </li>
            </ul>
        </div>
    </nav>
    <!-- /.navbar -->

    <section class="beranda pt-5 mb-5">
      <div class="container">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
          <p class="text-success" style="font-size: 1.5rem;">Harap Tunggu <span class="font-italic font-weight-bold">Siredig</span></p>
          <div class="spinner-grow text-success" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div>

        <!-- header -->
        <div class="row header mt-2 p-4 bg-light rounded">
          <div class="col mt-3" data-aos="fade-up">
            <h1><span>FRESH</span> FOOD</h1>
            <h2>&EAT FOOD</h2>
            <p><span>Eat good, live good, and eat good.</span><br>
              Nek mangan gausah miker<br> dunyo, marai ga nikmat.</p>
            <a href="menu.php" class="btn btn-sm bg-success shadow">Menu</a>
          </div>
          <div class="col" data-aos="fade-up">
            <img src="img/Group 100.png" alt="">
          </div>
        </div>

        <!-- menu -->
        <div class="row menu" id="makanan">
          <div class="col-12">
            <!-- paket -->
            <div class="konten mt-5">
              <h3 class="mt-2">Rekomendasi <span class="float-right"><a class="text-success" href="user/menu.php">Lihat Semua<i class="ml-2 fas fa-chevron-right"></i>
                  </a></span></h3>
              <div class="sec">
                <div class="box border border-light text-left bg-light" data-aos="flip-left">
                  <img src="img/paket/Paket1.png" alt="">
                  <h4>Paket 1</h4><span class="float-right link p-0 border"><a href="user/detailmenu.php" class="btn"><i class="fas fa-pizza-slice text-white"></a></i></span>
                  <p class="d-flex justify-content-between mb-2">Paket</p>
                  <a class="font-weight-bold" href="user/order.php">RP30.000</a>
                </div>
                <div class="box border border-light text-left bg-light" data-aos="flip-left">
                  <img src="img/paket/Paket1.png" alt="">
                  <h4>Paket 1</h4><span class="float-right link p-0 border"><a href="user/detailmenu.php" class="btn"><i class="fas fa-pizza-slice text-white"></a></i></span>
                  <p class="d-flex justify-content-between mb-2">Paket</p>
                  <a class="font-weight-bold" href="user/order.php">RP30.000</a>
                </div>
                <div class="box border border-light text-left bg-light" data-aos="flip-left">
                  <img src="img/paket/Paket1.png" alt="">
                  <h4>Paket 1</h4><span class="float-right link p-0 border"><a href="user/detailmenu.php" class="btn"><i class="fas fa-pizza-slice text-white"></a></i></span>
                  <p class="d-flex justify-content-between mb-2">Paket</p>
                  <a class="font-weight-bold" href="user/order.php">RP30.000</a>
                </div>
                <div class="box border border-light text-left bg-light" data-aos="flip-left" data-aos-delay="100">
                  <img src="img/paket/Paket2.png" alt="">
                  <h4>Paket 2</h4><span class="float-right link p-0 border"><a href="user/detailmenu.php" class="btn"><i class="fas fa-pizza-slice text-white"></a></i></span>
                  <p class="d-flex justify-content-between mb-2">Paket</p>
                  <a class="font-weight-bold" href="user/order.php">RP30.000</a>
                </div>
                <div class="box border border-light text-left bg-light" data-aos="flip-left" data-aos-delay="200">
                  <img src="img/paket/paket3.png" alt="">
                  <h4>Paket 3</h4><span class="float-right link p-0 border"><a href="user/detailmenu.php" class="btn"><i class="fas fa-pizza-slice text-white"></a></i></span>
                  <p class="d-flex justify-content-between mb-2">Paket</p>
                  <a class="font-weight-bold" href="user/order.php">RP30.000</a>
                </div>
                <div class="box border border-light text-left bg-light" data-aos="flip-left" data-aos-delay="300">
                  <img src="img/paket/paket3.png" alt="">
                  <h4>Paket 3</h4><span class="float-right link p-0 border"><a href="user/detailmenu.php" class="btn"><i class="fas fa-pizza-slice text-white"></a></i></span>
                  <p class="d-flex justify-content-between mb-2">Paket</p>
                  <a class="font-weight-bold" href="user/order.php">RP30.000</a>
                </div>
                <div class="box border border-light text-left bg-light" data-aos="flip-left" data-aos-delay="300">
                  <img src="img/paket/Paket4.png" alt="">
                  <h4>Paket 4</h4><span class="float-right link p-0 border"><a href="user/detailmenu.php" class="btn"><i class="fas fa-pizza-slice text-white"></a></i></span>
                  <p class="d-flex justify-content-between mb-2">Paket</p>
                  <a class="font-weight-bold" href="user/order.php">RP30.000</a>
                </div>
              </div>
            </div>

            <!-- jumbroton -->
            <div class="jumbotron bg-white box mt-5 p-3">
              <div class="row">
                <div class="col" data-aos="fade-up">
                  <img style="width: 300px;" src="img/burgerspesialview.png" alt="">
                </div>
                <div class="col pt-3" data-aos="fade-up">
                  <h2>Pilih Makanan Favoritmu</h2>
                  <p class="pt-4 pb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non, accusantium sint laboriosam repellendus quod blanditiis dolore ipsa tempore eius ut.</p>
                  <a class="btn btn-sm btn-success shadow" href="">Pilih Menu</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <div class="card-footer bg-dark text-muted text-center p-3">
      <p class="">Copyright@TeamTecwiz</p>
    </div>
  </div>

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
    AOS.init({
      once: true,
    });
  </script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
</body>

</html>