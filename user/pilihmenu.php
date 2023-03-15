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

    <?php include 'navbar.php'; ?>

    <!-- /.navbar -->


    <div class="content">
      <div class="container">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
          <p class="text-success" style="font-size: 1.5rem;">Harap Tunggu <span class="font-italic font-weight-bold">Siredig</span></p>
          <div class="spinner-grow text-success" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div>

        <div class="pilihmenu">
          <h2>Menu Ready</h2>
          <div class="row kategori">
            <div class="col">
              <a href="">Paket</a>
            </div>
            <div class="col">
              <a href="#makanan">Makanan</a>
            </div>
            <div class="col">
              <a href="">Minuman</a>
            </div>
            <div class="col">
              <a href="">cemilan</a>
            </div>
          </div>

          <div class="row menu" id="makanan">
            <div class="col-12">
              <div class="konten">
                <h3 class="mt-2">Paket</h3>

                <div class="sec">
                  <div class="box shadow-sm">
                    <img src="../img/paket/Paket1.png" alt="">
                    <h4>Paket 1</h4>
                    <p class="d-flex justify-content-between pl-2 pr-2">RP30.000<span>Stok 5</span></p>
                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                  </div>
                  <div class="box shadow-sm">
                    <img src="../img/paket/Paket2.png" alt="">
                    <h4>Paket 2</h4>
                    <p class="d-flex justify-content-between pl-2 pr-2">RP60.000<span>Stok 5</span></p>
                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                  </div>
                  <div class="box shadow-sm">
                    <img src="../img/paket/paket3.png" alt="">
                    <h4>Paket 3</h4>
                    <p class="d-flex justify-content-between pl-2 pr-2">RP45.000<span>Stok 5</span></p>
                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                  </div>
                  <div class="box shadow-sm">
                    <img src="../img/paket/Paket4.png" alt="">
                    <h4>Paket 4</h4>
                    <p class="d-flex justify-content-between pl-2 pr-2">RP25.000<span>Stok 5</span></p>
                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                  </div>
                  <div class="box shadow-sm">
                    <img src="../img/paket/Paket5.png" alt="">
                    <h4>Paket 5</h4>
                    <p class="d-flex justify-content-between pl-2 pr-2">RP20.000<span>Stok 5</span></p>
                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                  </div>
                </div>
              </div>

              <div class="konten">
                <h3 class="mt-4">Makanan</h3>
                <div class="sec">
                  <div class="box shadow-sm">
                    <img src="../img/makanan/a.png" alt="">
                    <h4>Burger Special</h4>
                    <p class="d-flex justify-content-between pl-2 pr-2">RP25.000<span>Stok 5</span></p>
                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                  </div>
                  <div class="box shadow-sm">
                    <img src="../img/makanan/nasigoreng.png" alt="">
                    <h4>Nasi Goreng</h4>
                    <p class="d-flex justify-content-between pl-2 pr-2">RP15.000<span>Stok 5</span></p>
                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                  </div>
                  <div class="box shadow-sm">
                    <img src="../img/makanan/pasta.png" alt="">
                    <h4>Pasta</h4>
                    <p class="d-flex justify-content-between pl-2 pr-2">RP20.000<span>Stok 5</span></p>
                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                  </div>
                  <div class="box shadow-sm">
                    <img src="../img/makanan/pizza.png" alt="">
                    <h4>Pizza</h4>
                    <p class="d-flex justify-content-between pl-2 pr-2">RP50.000<span>Stok 5</span></p>
                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                  </div>
                  <div class="box shadow-sm">
                    <img src="../img/makanan/seafood.png" alt="">
                    <h4>Seafood</h4>
                    <p class="d-flex justify-content-between pl-2 pr-2">RP30.000<span>Stok 5</span></p>
                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                  </div>
                </div>
              </div>

              <!-- minuman -->
              <div class="konten">
                <h3 class="mt-4">Minuman</h3>
                <div class="sec">
                  <div class="box shadow-sm">
                    <img src="../img/minuman/bull.png" alt="">
                    <h4>Coffe Milk</h4>
                    <p class="d-flex justify-content-between pl-2 pr-2">RP15.000<span>Stok 5</span></p>
                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                  </div>
                  <div class="box shadow-sm">
                    <img src="../img/minuman/coffelatte.png" alt="">
                    <h4>Coffe Latte</h4>
                    <p class="d-flex justify-content-between pl-2 pr-2">RP10.000<span>Stok 5</span></p>
                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                  </div>
                  <div class="box shadow-sm">
                    <img src="../img/minuman/macha.png" alt="">
                    <h4>Macha Latte</h4>
                    <p class="d-flex justify-content-between pl-2 pr-2">RP20.000<span>Stok 5</span></p>
                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                  </div>
                  <div class="box shadow-sm">
                    <img src="../img/minuman/coffelatte.png" alt="">
                    <h4>Chocolatte Milk</h4>
                    <p class="d-flex justify-content-between pl-2 pr-2">RP15.000<span>Stok 5</span></p>
                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                  </div>
                  <div class="box shadow-sm">
                    <img src="../img/minuman/lemontea.png" alt="">
                    <h4>Lemontea</h4>
                    <p class="d-flex justify-content-between pl-2 pr-2">RP8.000<span>Stok 5</span></p>
                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                  </div>
                </div>
              </div>
              <!-- cemilan -->
              <div class="konten">
                <h3 class="mt-4">Cemilan</h3>
                <div class="sec">
                  <div class="box shadow-sm">
                    <img src="../img/cemilan/kentanggoreng.png" alt="">
                    <h4>Kentang Goreng</h4>
                    <p class="d-flex justify-content-between pl-2 pr-2">RP13.000<span>Stok 5</span></p>
                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                  </div>
                  <div class="box shadow-sm">
                    <img src="../img/cemilan/churos.png" alt="">
                    <h4>Churos</h4>
                    <p class="d-flex justify-content-between pl-2 pr-2">RP10.000<span>Stok 5</span></p>
                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                  </div>
                  <div class="box shadow-sm">
                    <img src="../img/cemilan/makaroni.png" alt="">
                    <h4>Makaroni Shotel</h4>
                    <p class="d-flex justify-content-between pl-2 pr-2">RP15.000<span>Stok 5</span></p>
                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                  </div>
                  <div class="box shadow-sm">
                    <img src="../img/cemilan/kue choco late.png" alt="">
                    <h4>Chocolatte Cake</h4>
                    <p class="d-flex justify-content-between pl-2 pr-2">RP25.000<span>Stok 5</span></p>
                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                  </div>
                  <div class="box shadow-sm">
                    <img src="../img/cemilan/Mozzarela.png" alt="">
                    <h4>Mozzarela Stick</h4>
                    <p class="d-flex justify-content-between pl-2 pr-2">RP18.000<span>Stok 5</span></p>
                    <a class="btn btn-sm btn-success" href="">Tambah</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>


      <div class="container">
        <div class="pilihmenu note">
          <div class="row">
            <div class="col-sm-12">
              <h3>Detail Pesanan</h3>
              <table class="table no-border">
                <thead>
                  <tr>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama Pesanan</th>
                    <th scope="col">Harga Satuan</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Hapus</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="border border-light">
                    <td><img src="../img/nasigoreng.png" alt="" class="rounded"></td>
                    <td>Nasi Goreng</td>
                    <td>RP15.000</td>
                    <td><input class="form-control form-control-sm" type="number"></td>
                    <td>RP30.000</td>
                    <td><button class="bg-danger rounded-circle"><i class="fa fa-trash"></i></button></td>
                  </tr>
                  <tr class="border border-light">
                    <td><img src="../img/nasigoreng.png" alt="" class="rounded"></td>
                    <td>Nasi Goreng</td>
                    <td>RP15.000</td>
                    <td><input class="form-control form-control-sm" type="number"></td>
                    <td>RP30.000</td>
                    <td><button class="bg-danger rounded-circle"><i class="fa fa-trash"></i></button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="row float-right ">
          <div class="col-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Total Pembayaran</h5> <br>
                <div class="row border-bottom">
                  <div class="col">
                    <p class="">Struk Pembayaran</p>
                  </div>
                  <div class="col">
                    <p class="float-right">RP30.000</p>
                  </div>
                </div>
                <a href="metodepembayaran.php" class="card-link float-right border-bottom">Lanjutkan Pembayaran</a>
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