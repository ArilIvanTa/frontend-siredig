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

        <section class="pembayaran mt-5 mb-5">
            <div class="container">

                <!-- Preloader -->
                <div class="preloader flex-column justify-content-center align-items-center">
                    <p class="text-success" style="font-size: 1.5rem;">Harap Tunggu <span class="font-italic font-weight-bold">Siredig</span></p>
                    <div class="spinner-grow text-success" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>

                <div class="row">
                    <!-- kolom1 -->
                    <div class="col-md-7 border rounded p-3 pilihmenu data">
                        <h2>Pembayaran</h2>
                        <form action="">
                            <label class="mb-1 mt-2">Nama</label> <br>
                            <input class="form-control" type="text" placeholder="Masukkan Nama">
                            <label class="mb-1 mt-2">No Telepon</label> <br>
                            <input class="form-control" type="number" placeholder="Masukkan No Telp">
                            <label class="mb-1 mt-2">Catatan</label> <br>
                            <input class="form-control" type="text" placeholder="Masukkan Catatan">

                            <h3 class="mt-3 mb-2">Metode Pembayaran</h3>
                            <label class="w-100 border p-2 rounded" for="">
                                <input class="mr-2" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                Bayar Di Tempat
                            </label>
                            <label class="w-100 border p-2 rounded" for="">
                                <input class="mr-2" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <img src="../img/bri.png" alt="">
                            </label>
                            <label class="w-100 border p-2 rounded" for="">
                                <input class="mr-2" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <img src="../img/bni.png" alt="">
                            </label>
                            <label class="w-100 border p-2 rounded" for="">
                                <input class="mr-2" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <img src="../img/bca.png" alt="">
                            </label>
                            <button type="submit" class="btn btn-sm btn-success mt-2 mb-2">Bayar</button>
                    </div>
                    </form>
                    <!-- kolom2 -->
                    <div class="col-md-4 offset-md-1 sticky-top">
                        <div class="pilihmenu p-0">
                            <div class="card p-3 rounded">
                                <div class="card-header p-2 text-center">
                                    <h2>Detail Pembayaran</h2>
                                </div>
                                <div class="card-body pb-0 pt-2">
                                    <div class="row pt-2">
                                        <div class="col-12 mb-2">
                                            <p class=" font-weight-bold text-dark">Nama<span class="font-weight-bold float-right">ivan</span></p>
                                            <p class=" font-weight-bold text-dark">No Meja<span class="font-weight-bold float-right">01</span></p>
                                        </div>
                                        <div class="col-12">
                                            <p class="mb-0">Nasi Goreng<span class="font-weight-normal float-right">RP 15.000</span></p>
                                            <p class="mb-0">Nasi Goreng<span class="font-weight-normal float-right">RP 15.000</span></p>
                                        </div>
                                        <div class="col-12 pb-2 border-bottom">
                                            <p class="font-weight-bold mb-2">Metode Pembayaran <span class="float-right"><img src="../img/bri.png" alt="" style="height: 1.2rem;"></span></p>
                                        </div>
                                        <div class="col-12 pt-3">
                                            <p class="font-weight-bold mb-3">Total Pembayaran<span class="font-weight-bold float-right">RP 30.000</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class=" border-top">
                                    <a href="bank.php" class="btn btn-sm btn-success w-100">Bayar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
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