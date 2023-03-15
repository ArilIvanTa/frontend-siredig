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
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white sticky-top">
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

        <section class="selesai  mt-5">
            <div class="container">

                <!-- Preloader -->
                <div class="preloader flex-column justify-content-center align-items-center">
                    <p class="text-success" style="font-size: 1.5rem;">Harap Tunggu <span class="font-italic font-weight-bold">Siredig</span></p>
                    <div class="spinner-grow text-success" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>

                <div class="card text-center mx-auto shadow">
                    <div class="card-body " data-aos="zoom-up">
                        <i class="fas fa-check rounded-circle text-success" data-aos="zoom-up"></i>
                        <h2 class="text-success">Pembayaran Berhasil</h2>
                        <p class="mb-3 text-success font-weight-normal">Pesanan sedang di proses</p>

                        <div class="row text-left p-1 bg-light border-bottom">
                            <div class="col-4">
                                <p class="p-0 m-0 ">No Meja :</p>
                            </div>
                            <div class="col-8">
                                <p class="p-0 m-0  float-right">01</p>
                            </div>
                            <div class="col-4">
                                <p class="p-0 m-0 ">Nama :</p>
                            </div>
                            <div class="col-8">
                                <p class="p-0 m-0  float-right">ivan</p>
                            </div>
                            <div class="col-4">
                                <p class="p-0 m-0 ">Kasir :</p>
                            </div>
                            <div class="col-8">
                                <p class="p-0 m-0  float-right">01</p>
                            </div>
                        </div>

                        <div class="row text-left p-1 bg-light border-bottom">
                            <div class="col-12">
                                <p class="text-center p-0 m-0 ">Pesanan</p>
                            </div>
                            <div class="col-6">
                                <p class="m-0 p-0">Nasi Goreng</p>
                            </div>
                            <div class="col-6">
                                <p class="m-0 p-0 float-right text-dark">RP15.000</p>
                            </div>
                            <div class="col-6">
                                <p class="m-0 p-0">Nasi Goreng</p>
                            </div>
                            <div class="col-6">
                                <p class="m-0 p-0 float-right text-dark">RP15.000</p>
                            </div>
                        </div>

                        <div class="row text-left p-1 bg-light border-bottom">
                            <div class="col-6">
                                <p class=" p-0 m-0">Jumlah Pesanan</p>
                            </div>
                            <div class="col-6">
                                <p class=" float-right p-0 m-0">2</p>
                            </div>
                        </div>

                        <div class="row rounded text-left p-1 bg-light border-bottom">
                            <div class="col-6">
                                <p class=" p-0 m-0">Sub Total</p>
                            </div>
                            <div class="col-6">
                                <p class=" float-right p-0 m-0">RP 30.000</p>
                            </div>
                            <div class="col-6">
                                <p class=" p-0 m-0">Diskon</p>
                            </div>
                            <div class="col-6">
                                <p class=" float-right p-0 m-0">0</p>
                            </div>
                        </div>

                        <div class="row rounded text-left p-1 bg-light border-bottom">
                            <div class="col-6">
                                <p class=" p-0 m-0">Total</p>
                            </div>
                            <div class="col-6">
                                <p class=" float-right p-0 m-0">RP 30.000</p>
                            </div>
                            <div class="col-6">
                                <p class=" p-0 m-0">Tunai</p>
                            </div>
                            <div class="col-6">
                                <p class=" float-right p-0 m-0">RP 30.000</p>
                            </div>
                            <div class="col-6">
                                <p class=" p-0 m-0">Non Tunai</p>
                            </div>
                            <div class="col-6">
                                <p class=" float-right p-0 m-0">0</p>
                            </div>
                            <div class="col-6">
                                <p class=" p-0 m-0">Kembali</p>
                            </div>
                            <div class="col-6">
                                <p class=" float-right p-0 m-0">0</p>
                            </div>
                        </div>

                        <div class="row rounded p-1 bg-light">
                            <div class="col-12 mt-2">
                                <p class=" text-center">15/03/2023 | 21.54</p>
                            </div>
                        </div>
                        <p class="mt-3 text-success">Terimakasih telah order di Siredig</p>
                        <a href="../index.php" class="btn btn-sm btn-success w-100">Kembali Ke Beranda</a>
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