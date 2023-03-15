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
    <link rel="stylesheet" href="../user/siredig.css">
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
                                <a href="masuk.php" class="bar">Masuk</a>
                            </li>
                        </ul>
                </div>
        </nav>
        <!-- /.navbar -->

        <section class="order pt-5 mb-5">
            <div class="container">

                <!-- Preloader -->
                <div class="preloader flex-column justify-content-center align-items-center">
                    <p class="text-success" style="font-size: 1.5rem;">Harap Tunggu <span class="font-italic font-weight-bold">Siredig</span></p>
                    <div class="spinner-grow text-success" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>

                <h2 data-aos="fade-down">Pilih Produk</h2>
                <!-- menu -->
                <div class="row menu d-flex justify-content-between" id="makanan">
                    <div class="col-md-7">
                        <!-- paket -->
                        <div class="konten">
                            <h3 class="mt-4" data-aos="fade-down">Paket</h3>
                            <div class="sec" data-aos="fade-down">
                                <div class="box shadow-sm" data-aos="fade-down">
                                    <img src="../img/paket/Paket1.png" alt="">
                                    <h4>Paket 1</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP30.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                                </div>
                                <div class="box shadow-sm" data-aos="fade-down">
                                    <img src="../img/paket/Paket2.png" alt="">
                                    <h4>Paket 2</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP60.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                                </div>
                                <div class="box shadow-sm" data-aos="fade-down">
                                    <img src="../img/paket/paket3.png" alt="">
                                    <h4>Paket 3</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP45.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                                </div>
                                <div class="box shadow-sm" data-aos="fade-down">
                                    <img src="../img/paket/Paket4.png" alt="">
                                    <h4>Paket 4</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP25.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                                </div>
                                <div class="box shadow-sm" data-aos="fade-down">
                                    <img src="../img/paket/Paket5.png" alt="">
                                    <h4>Paket 5</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP20.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                                </div>
                            </div>
                        </div>

                        <!-- makanan -->
                        <div class="konten">
                            <h3 class="mt-4" data-aos="fade-down">Makanan</h3>
                            <div class="sec" data-aos="fade-down">
                                <div class="box shadow-sm" data-aos="fade-down">
                                    <img src="../img/makanan/a.png" alt="">
                                    <h4>Burger Special</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP25.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                                </div>
                                <div class="box shadow-sm" data-aos="fade-down">
                                    <img src="../img/makanan/nasigoreng.png" alt="">
                                    <h4>Nasi Goreng</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP15.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                                </div>
                                <div class="box shadow-sm" data-aos="fade-down">
                                    <img src="../img/makanan/pasta.png" alt="">
                                    <h4>Pasta</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP20.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                                </div>
                                <div class="box shadow-sm" data-aos="fade-down">
                                    <img src="../img/makanan/pizza.png" alt="">
                                    <h4>Pizza</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP50.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                                </div>
                                <div class="box shadow-sm" data-aos="fade-down">
                                    <img src="../img/makanan/seafood.png" alt="">
                                    <h4>Seafood</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP30.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                                </div>
                            </div>
                        </div>

                        <!-- minuman -->
                        <div class="konten">
                            <h3 class="mt-4" data-aos="fade-down">Minuman</h3>
                            <div class="sec" data-aos="fade-down">
                                <div class="box shadow-sm" data-aos="fade-down">
                                    <img src="../img/minuman/bull.png" alt="">
                                    <h4>Coffe Milk</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP15.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                                </div>
                                <div class="box shadow-sm" data-aos="fade-down">
                                    <img src="../img/minuman/coffelatte.png" alt="">
                                    <h4>Coffe Latte</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP10.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                                </div>
                                <div class="box shadow-sm" data-aos="fade-down">
                                    <img src="../img/minuman/macha.png" alt="">
                                    <h4>Macha Latte</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP20.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                                </div>
                                <div class="box shadow-sm" data-aos="fade-down">
                                    <img src="../img/minuman/coffelatte.png" alt="">
                                    <h4>Chocolatte Milk</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP15.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                                </div>
                                <div class="box shadow-sm" data-aos="fade-down">
                                    <img src="../img/minuman/lemontea.png" alt="">
                                    <h4>Lemontea</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP8.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                                </div>
                            </div>
                        </div>

                        <!-- cemilan -->
                        <div class="konten">
                            <h3 class="mt-4" data-aos="fade-down">Cemilan</h3>
                            <div class="sec" data-aos="fade-down">
                                <div class="box shadow-sm" data-aos="fade-down">
                                    <img src="../img/cemilan/kentanggoreng.png" alt="">
                                    <h4>Kentang Goreng</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP13.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                                </div>
                                <div class="box shadow-sm" data-aos="fade-down">
                                    <img src="../img/cemilan/churos.png" alt="">
                                    <h4>Churos</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP10.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                                </div>
                                <div class="box shadow-sm" data-aos="fade-down">
                                    <img src="../img/cemilan/makaroni.png" alt="">
                                    <h4>Makaroni Shotel</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP15.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                                </div>
                                <div class="box shadow-sm" data-aos="fade-down">
                                    <img src="../img/cemilan/kue choco late.png" alt="">
                                    <h4>Chocolatte Cake</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP25.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                                </div>
                                <div class="box shadow-sm" data-aos="fade-down">
                                    <img src="../img/cemilan/Mozzarela.png" alt="">
                                    <h4>Mozzarela Stick</h4>
                                    <p class="d-flex justify-content-between pl-2 pr-2">RP18.000<span>Stok 5</span></p>
                                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- struk -->
                    <div class="col-md-4 mt-3 pl-2 pt-5">
                        <div class="card struk sticky-top" data-aos="fade-up">
                            <div class="card-header">
                                <h3 class="text-center">Pesanan</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="float-left p-0">Burger Special <span class="text-success">RP25.000</span></p>
                                    </div>
                                    <div class="col-6">
                                        <a href="" class="btn btn-sm btn-danger float-right"><i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="float-left p-0">Burger Special <span class="text-success">RP25.000</span></p>
                                    </div>
                                    <div class="col-6">
                                        <a href="" class="btn btn-sm btn-danger float-right"><i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="float-left p-0">Burger Special <span class="text-success">RP25.000</span></p>
                                    </div>
                                    <div class="col-6">
                                        <a href="" class="btn btn-sm btn-danger float-right"><i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white border-top text-muted">
                                <div class="row">
                                    <div class="col-6">
                                        <h4 class="float-left p-0">Total Pembayaran</h4>
                                    </div>
                                    <div class="col-6">
                                        <h4 class="float-right">RP20.000</h4>
                                    </div>
                                </div>
                                <a href="metodepembayaran.php" class="btn btn-success w-100">Lanjutkan Pesanan</a>
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