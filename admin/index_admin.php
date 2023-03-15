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
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
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
                <a href="index_admin.php" class="bar">Dashboard</a>
              </li>
              <li class="nav-item">
                <a href="pesananadmin.php" class="bar">Pesanan</a>
              </li>
              <li class="nav-item dropdown">
                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="bar dropdown-toggle">Admin</a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                  <li><a href="daftarpengguna.php" class="dropdown-item">List User</a></li>
                  <li><a href="formuser.php" class="dropdown-item">Form User</a></li>

                  <li class="dropdown-divider"></li>

                  <li><a href="daftarmenu_view.php" class="dropdown-item">List Menu</a></li>
                  <li><a href="formmenu.php" class="dropdown-item">Form Menu</a></li>

                </ul>
              </li>
              <li class="nav-item">
                <a href="" class="bar" data-toggle="modal" data-target=".modal">Keluar</a>
              </li>
            </ul>
        </div>
    </nav>
    <!-- /.navbar -->

    <div class="modal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Keluar?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Apakah anda ingin Keluar?</p>
          </div>
          <div class="modal-footer">
            <a href="#" type="button" class="btn btn-danger" data-dismiss="modal">Tidak</a>
            <a href="../index.php" type="button" class="btn btn-success">Iya</a>
          </div>
        </div>
      </div>
    </div>

    <section class="dashboard mt-5">
      <div class="container">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            <h2 class="mb-3">Dashboard</h2>
          </div>
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <h3>150</h3>

                <p>Pesanan</p>
              </div>
              <div class="icon">
                <i class="fas fa-pizza-slice"></i>
              </div>
              <a href="pesananadmin.php" class="small-box-footer">Cek Pesanan<i class="fas fa-arrow-circle-right ml-1"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <h3>Menu</h3>

                <p>Tambah Menu</p>
              </div>
              <div class="icon">
                <i class="fas fa-plus"></i>
              </div>
              <a href=" daftarmenu_view.php" class="small-box-footer">Tambah Menu <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-light text-success">
              <div class="inner">
                <h3>User</h3>

                <p>User List</p>
              </div>
              <div class="icon">
                <i class="fas fa-user "></i>
              </div>
              <a href="daftarpengguna.php" class="small-box-footer">User <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        <!-- chart -->
        <div class="row mt-3 mb-5 rounded bg-light" style="height: 400px;">
          <div class="col-6 p-2">
            <div id="chart" style="height: 100%; width: 100%;"></div>
          </div>
          <div class="col-6">
            <div id="linechart" style="height: 100%; width: 100%;"></div>
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
  <!-- Page specific script -->
  <!-- echart -->
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5.4.1/dist/echarts.min.js"></script>
  <!-- my js -->
  <script type="text/javascript">
    var dom = document.getElementById('chart');
    var myChart = echarts.init(dom, null, {
      renderer: 'canvas',
      useDirtyRect: false
    });
    var app = {};

    var option;

    option = {
      legend: {
        top: 'bottom'
      },
      toolbox: {
        show: true,
        feature: {
          mark: {
            show: true
          },
          dataView: {
            show: true,
            readOnly: false
          },
          restore: {
            show: true
          },
          saveAsImage: {
            show: true
          }
        }
      },
      series: [{
        name: 'Nightingale Chart',
        type: 'pie',
        radius: [15, 120],
        center: ['50%', '50%'],
        roseType: 'area',
        itemStyle: {
          borderRadius: 8
        },
        data: [{
            value: 40,
            name: 'rose 1'
          },
          {
            value: 38,
            name: 'rose 2'
          },
          {
            value: 32,
            name: 'rose 3'
          },
          {
            value: 30,
            name: 'rose 4'
          },
          {
            value: 28,
            name: 'rose 5'
          },
          {
            value: 26,
            name: 'rose 6'
          },
          {
            value: 22,
            name: 'rose 7'
          },
          {
            value: 18,
            name: 'rose 8'
          }
        ]
      }]
    };



    if (option && typeof option === 'object') {
      myChart.setOption(option);
    }

    window.addEventListener('resize', myChart.resize);
  </script>

  <!-- line chart -->
  <script type="text/javascript">
    var dom = document.getElementById('linechart');
    var myChart = echarts.init(dom, null, {
      renderer: 'canvas',
      useDirtyRect: false
    });
    var app = {};

    var option;

    option = {
      xAxis: {
        type: 'category',
        data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
      },
      yAxis: {
        type: 'value'
      },
      series: [{
        data: [150, 230, 224, 218, 135, 147, 260],
        type: 'line'
      }]
    };

    if (option && typeof option === 'object') {
      myChart.setOption(option);
    }

    window.addEventListener('resize', myChart.resize);
  </script>
</body>

</html>