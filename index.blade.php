<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Nurul Aziza Chanel</title>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{ asset('/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('/css/sb-admin.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Nurul Aziza</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('dosen') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Data Dosen</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('matakuliah') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Mata Kuliah</span></a>
      <li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/product') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Product</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/customer') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Customer</span></a>
      <li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('invoice.create') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Buat Invoice</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('invoice.index') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>List Invoice</span></a>
      <li>
    </ul>
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Hai Teman-teman</a>
          </li>
          <li class="breadcrumb-item active">Jangan lupa like and subsribe</li>
          <!-- Portfolio Section -->
          </ol>
 <section class="page-section bg-dark text-white" id="portfolio">
 <div class="text-center">
 <h2 class="mt-0">Foto-Foto Product</h2>
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/a3.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/a3.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Paket Sushi
              </div>
              <div class="project-name">
                Sushi
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/a2.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/a2.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Paket Nasi
              </div>
              <div class="project-name">
                Nasi Goreng
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/a4.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/a4.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Paket Ayam
              </div>
              <div class="project-name">
                Ayam Korea
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/a5.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/a5.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Paket Mie Korea
              </div>
              <div class="project-name">
                Mie Ramen
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/a6.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/a6.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Paket Gorengan
              </div>
              <div class="project-name">
                Nugget
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/a8.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/a8.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
                Paket Mie Jepang
              </div>
              <div class="project-name">
                Mie RamenCumi
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

        </ol>

<!-- Sticky Footer -->
<footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="assets/vendor/chart.js/Chart.min.js"></script>
  <script src="assets/vendor/datatables/jquery.dataTables.js"></script>
  <script src="assets/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="assets/js/demo/datatables-demo.js"></script>
  <script src="assets/js/demo/chart-area-demo.js"></script>

</body>
</html>
