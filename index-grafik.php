<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>IoT Air Quality</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>


<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php; margin-top:50px">
                <div class="sidebar-brand-text mx-3">Air Quality Monitor</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block"></hr>
            <!-- Heading -->
            <div class="sidebar-heading">
                Telusuri
            </div>
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Utama</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index-grafik.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Grafik</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index-info.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Informasi</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayar"
                    aria-expanded="true" aria-controls="collapseLayar">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Layar</span>
                </a>
                <div id="collapseLayar" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilihan warna:</h6>
                        <a class="collapse-item" href="layout-static.php">Gelap</a>
                        <a class="collapse-item" href="layout-sidenav-light.php">Terang</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Menu</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilihan Menu:</h6>
                        <a class="collapse-item" href="login.html">Masuk</a>
                        <a class="collapse-item" href="register.html">Daftar</a>
                        <a class="collapse-item" href="forgot-password.html">Lupa Password</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>
        </ul>
        <!-- End of Sidebar -->



        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-dark bg-gradient-dark topbar mb-4 static-top shadow">
                    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
                    <!-- Navbar Search-->
                    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-light small">
                                    Jurusan Fisika FMIPA Universitas Lampung
                                </span>
                                <img class="img-profile rounded-circle"src="img/LogoUnila.png">
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->           

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h5 mb-2 text-gray-800"><b>Data Monitoring Grafik</b></h1>
                    <p class="mb-1 text-dark">Berikut merupakan data pengukuran kualitas udara</p>
                    <!-- Content Row -->
                    <div class="row" id>
                        <!-- Area Chart PLTU-->
                        <div class="col-xl-8 col-lg-8" id = AreaChart1></div>
                        <div class="col-xl-8 col-lg-8" id = AreaChart2></div>
                        <div class="col-xl-8 col-lg-8" id = AreaChart3></div>
                        <div class="col-xl-8 col-lg-8" id = AreaChart4></div>
                    </div>       
                </div>
                <!-- /.container-fluid -->           
            </div>
            <!-- End of Main Content -->


            <!-- Footer -->
            <footer class="sticky-footer bg-gradient-light shadow">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Dipersembahkan Oleh &copy; Jurusan Fisika Fakultas MIPA Universitas Lampung</span>
                    </div>
                </div>
            </footer>

        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-pie-demo-p.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery-3.4.0.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/mdb.min.js"></script>
    <script type="text/javascript" src="jquery-latest.js"></script>

    <!-- memanggil AreaChart atau grafik Realtime-->
    <script type="text/javascript">
        var refreshid = setInterval(function(){
            $("#AreaChart1").load("chart-grafik-NO2.php");
            $("#AreaChart2").load("chart-grafik-PM10.php");
            $("#AreaChart3").load("chart-grafik-CO.php");
            $("#AreaChart4").load("chart-grafik-CO2.php");
        }, 1000 );      
    </script>   

</body>

</html>