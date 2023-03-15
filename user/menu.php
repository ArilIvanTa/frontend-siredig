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
    <link rel="stylesheet" href="siredig.css">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <img src="../img/loogo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
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
                                <a href="../index.php" class="bar">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a href="menu.php" class="bar">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a href="order.php" class="bar">Order</a>
                            </li>
                            <li class="nav-item">
                                <a href="pesanan.php" class="bar">Pesanan</a>
                            </li>
                            <li class="nav-item">
                                <a href="order.php" class="bar">Masuk</a>
                            </li>
                        </ul>
                </div>
        </nav>
        <!-- /.navbar -->

        <section class="menu pt-5 mb-5">
            <div class="container">

                <!-- Preloader -->
                <div class="preloader flex-column justify-content-center align-items-center">
                    <p class="text-success" style="font-size: 1.5rem;">Harap Tunggu <span class="font-italic font-weight-bold">Siredig</span></p>
                    <div class="spinner-grow text-success" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>

                <h2 class="mb-4" data-aos="fade-up">Menu</h2>
                <!-- pilihan menu -->
                <div class="row bg-white">
                    <div class="col-12 kategori">
                        <a class="border rounded border-success text-success pt-1 pb-1 pr-4 pl-4 mr-2" href="#paket">Paket</a>
                        <a class="border rounded border-success text-success pt-1 pb-1 pr-4 pl-4 mr-2" href="#makanan">Makanan</a>
                        <a class="border rounded border-success text-success pt-1 pb-1 pr-4 pl-4 mr-2" href="#minuman">Minuman</a>
                        <a class="border rounded border-success text-success pt-1 pb-1 pr-4 pl-4 mr-2" href="#cemilan">Cemilan</a>
                    </div>
                </div>
                <!-- menu -->
                <div class="row menu">
                    <div class="col-12">
                        <!-- paket -->
                        <div class="konten" id="paket">
                            <h3 class="mt-4" data-aos="zoom-up">Paket</h3>
                            <div class="sec">
                                <div class="box bg-light shadow-sm" data-aos="flip-left">
                                    <img src="../img/paket/Paket1.png" alt="">
                                    <h4 class="mb-3">Paket 1</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP30.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Order</i></a>
                                </div>
                                <div class="box bg-light shadow-sm" data-aos="flip-left" data-aos-delay="100">
                                    <img src="../img/paket/Paket2.png" alt="">
                                    <h4 class="mb-3">Paket 2</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP60.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Order</i></a>
                                </div>
                                <div class="box bg-light shadow-sm" data-aos="flip-left" data-aos-delay="200">
                                    <img src="../img/paket/paket3.png" alt="">
                                    <h4 class="mb-3">Paket 3</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP45.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Order</i></a>
                                </div>
                                <div class="box bg-light shadow-sm" data-aos="flip-left" data-aos-delay="300">
                                    <img src="../img/paket/Paket4.png" alt="">
                                    <h4 class="mb-3">Paket 4</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP25.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Order</i></a>
                                </div>
                                <div class="box bg-light shadow-sm" data-aos="flip-left" data-aos-delay="400">
                                    <img src="../img/paket/Paket5.png" alt="">
                                    <h4 class="mb-3">Paket 5</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP20.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Order</i></a>
                                </div>
                            </div>
                        </div>

                        <!-- makanan -->
                        <div class="konten" id="makanan">
                            <h3 class="mt-4" data-aos="zoom-up">Makanan</h3>
                            <div class="sec">
                                <div class="box bg-light shadow-sm" data-aos="flip-left">
                                    <img src="../img/makanan/a.png" alt="">
                                    <h4 class="mb-3">Burger Special</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP25.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Order</i></a>
                                </div>
                                <div class="box bg-light shadow-sm" data-aos="flip-left" data-aos-delay="100">
                                    <img src="../img/makanan/nasigoreng.png" alt="">
                                    <h4 class="mb-3">Nasi Goreng</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP15.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Order</i></a>
                                </div>
                                <div class="box bg-light shadow-sm" data-aos="flip-left" data-aos-delay="200">
                                    <img src="../img/makanan/pasta.png" alt="">
                                    <h4 class="mb-3">Pasta</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP20.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Order</i></a>
                                </div>
                                <div class="box bg-light shadow-sm" data-aos="flip-left" data-aos-delay="300">
                                    <img src="../img/makanan/pizza.png" alt="">
                                    <h4 class="mb-3">Pizza</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP50.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Order</i></a>
                                </div>
                                <div class="box bg-light shadow-sm" data-aos="flip-left" data-aos-delay="400">
                                    <img src="../img/makanan/seafood.png" alt="">
                                    <h4 class="mb-3">Seafood</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP30.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Order</i></a>
                                </div>
                            </div>
                        </div>

                        <!-- minuman -->
                        <div class="konten" id="minuman">
                            <h3 class="mt-4" data-aos="zoom-up">Minuman</h3>
                            <div class="sec">
                                <div class="box bg-light shadow-sm" data-aos="flip-left">
                                    <img src="../img/minuman/bull.png" alt="">
                                    <h4 class="mb-3">Coffe Milk</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP15.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Order</i></a>
                                </div>
                                <div class="box bg-light shadow-sm" data-aos="flip-left" data-aos-delay="100">
                                    <img src="../img/minuman/coffelatte.png" alt="">
                                    <h4 class="mb-3">Coffe Latte</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP10.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Order</i></a>
                                </div>
                                <div class="box bg-light shadow-sm" data-aos="flip-left" data-aos-delay="200">
                                    <img src="../img/minuman/macha.png" alt="">
                                    <h4 class="mb-3">Macha Latte</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP20.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Order</i></a>
                                </div>
                                <div class="box bg-light shadow-sm" data-aos="flip-left" data-aos-delay="300">
                                    <img src="../img/minuman/coffelatte.png" alt="">
                                    <h4 class="mb-3">Chocolatte Milk</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP15.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Order</i></a>
                                </div>
                                <div class="box bg-light shadow-sm" data-aos="flip-left" data-aos-delay="400">
                                    <img src="../img/minuman/lemontea.png" alt="">
                                    <h4 class="mb-3">Lemontea</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP8.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Order</i></a>
                                </div>
                            </div>
                        </div>

                        <!-- cemilan -->
                        <div class="konten" id="cemilan">
                            <h3 class="mt-4" data-aos="zoom-up">Cemilan</h3>
                            <div class="sec">
                                <div class="box bg-light shadow-sm" data-aos="flip-left">
                                    <img src="../img/cemilan/kentanggoreng.png" alt="">
                                    <h4 class="mb-3">Kentang Goreng</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP13.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Order</i></a>
                                </div>
                                <div class="box bg-light shadow-sm" data-aos="flip-left" data-aos-delay="100">
                                    <img src="../img/cemilan/churos.png" alt="">
                                    <h4 class="mb-3">Churos</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP10.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Order</i></a>
                                </div>
                                <div class="box bg-light shadow-sm" data-aos="flip-left" data-aos-delay="200">
                                    <img src="../img/cemilan/makaroni.png" alt="">
                                    <h4 class="mb-3">Makaroni Shotel</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP15.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Order</i></a>
                                </div>
                                <div class="box bg-light shadow-sm" data-aos="flip-left" data-aos-delay="300">
                                    <img src="../img/cemilan/kue choco late.png" alt="">
                                    <h4 class="mb-3">Chocolatte Cake</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP25.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Order</i></a>
                                </div>
                                <div class="box bg-light shadow-sm" data-aos="flip-left" data-aos-delay="400">
                                    <img src="../img/cemilan/Mozzarela.png" alt="">
                                    <h4 class="mb-3">Mozzarela Stick</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP18.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Order</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- REQUIRED SCRIPTS -->
    <!-- tilt -->
    <script type="text/javascript" src="vanilla-tilt.min.js"></script>
    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });
    </script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
</body>

</html>