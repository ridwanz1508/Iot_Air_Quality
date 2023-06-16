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
        <ul class="navbar-nav bg-dark sidebar sidebar-dark" id="accordionSidebar">
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
                        <a class="collapse-item" href="forgot-password.php">Lupa Password</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>
        </ul>
        <!-- End of Sidebar -->

        
                <!-- Content Wrapper -->
                <div id="content-wrapper">
                <!-- Main Content -->
                <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-dark bg-gradient-dark topbar mb-2 static-top shadow">
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
                    <h1 class="mt-4">Sistem Monitoring Kualitas Udara</h1>
                    <h1 class="mt-4"></h1>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Monitoring Gas NO2-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card bg-warning shadow">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark mb-2">
                                                <b>NO2 (ug/m3)</b>
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div div class="h5 mb-0 mr-3 font-weight-bold text-dark"> 
                                                        <span id = "cekNO2"> 00.00 </span> 
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-dark" role="progressbar"
                                                            style="width: 20%" aria-valuenow="50" 
                                                            aria-valuemin="0"aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Monitoring Materi PM10 -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card bg-success shadow">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark mb-2">
                                                <b>PM10 (ug/m3)</b>
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-dark"> 
                                                        <span id = "cekPM10"> 00.00 </span> 
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-dark" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" 
                                                            aria-valuemin="0"aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Monitoring Gas CO -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card bg-info shadow">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark mb-2">
                                                <b>CO (ug/m3)</b>
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-dark"> 
                                                        <span id = "cekCO"> 00.00 </span> 
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-dark" role="progressbar"
                                                            style="width: 80%" aria-valuenow="50" 
                                                            aria-valuemin="0"aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Monitoring Gas CO2 -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card bg-danger shadow">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark mb-2">
                                                <b>CO2 (ug/m3)</b>
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-dark"> 
                                                        <span id = "cekCO2"> 00.00 </span> 
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-dark" role="progressbar"
                                                            style="width: 70%" aria-valuenow="50" 
                                                            aria-valuemin="0"aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                    <!-- Content Row -->
                    <div class="row">

                        <!-- Area Chart PLTU 8-7-->
                        <div class="col-xl-9 col-lg-7" id = AreaChart></div> 

                        <!-- Pie Chart -->
                        <div class="col-xl-3 col-lg-4">
                            <div class="card shadow mb-4">
                                <!-- Card Header -->
                                <div class="card-header bg-dark py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-light">Data Indeks</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                        
                                    <canvas id="doughnutChart" width = "400px" hieght = "400px" ></canvas>

                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                    <script>
                                        // Fungsi untuk mengupdate chart dengan data terbaru
                                        function updateChart(data) {
                                            // Mengambil referensi chart
                                            var ctx = document.getElementById('doughnutChart').getContext('2d');
                                            // Mengatur ukuran canvas chart
                                            ctx.canvas.width = 209; // Ubah sesuai kebutuhan
                                            ctx.canvas.height = 209; // Ubah sesuai kebutuhan

                                            // Memperbarui chart dengan data terbaru
                                            if (typeof chart !== 'undefined') {
                                                chart.data.datasets[0].data = Object.values(data);
                                                chart.update();
                                            } else {
                                                chart = new Chart(ctx, {
                                                    type: 'doughnut',
                                                    data: {
                                                        labels: Object.keys(data),
                                                        datasets: [{
                                                            data: Object.values(data),
                                                            backgroundColor: [
                                                                'rgba(0, 255, 0, 0.5)',
                                                                'rgba(255, 165, 0, 0.5)',
                                                                'rgba(255, 0, 0, 0.5)',                                              
                                                            ]
                                                        }]
                                                    },
                                                    options: {
                                                        borderWidth: 1 // Ubah nilai ketebalan garis sesuai kebutuhan
                                                    }
                                                });
                                            }
                                        }
                                        // Fungsi untuk mengambil data terbaru dari server
                                        function fetchData() {
                                            return new Promise(function(resolve, reject) {
                                                $.ajax({
                                                    url: 'chart-doughnut-demo.php', // Nama file PHP untuk mengambil data dari database
                                                    method: 'GET',
                                                    dataType: 'json',
                                                    success: function(response) {
                                                        resolve(response);
                                                    },
                                                    error: function(xhr, status, error) {
                                                        reject(error);
                                                    }
                                                });
                                            });
                                        }
                                        // Memanggil fungsi fetchData setiap 5 detik
                                        setInterval(function() {
                                            fetchData().then(function(response) {
                                                updateChart(response);
                                            }).catch(function(error) {
                                                console.error(error);
                                            });
                                        }, 5000);

                                    </script>
                                    
                            </div> 
                        </div> 
                    </div>
                    <!-- end content row area and pie card-->

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

    <!-- memanggil chard Realtime-->
    <script type="text/javascript">
        $(document).ready ( function(){
            setInterval ( function() {
               $("#cekNO2").load("cekNO2.php") ;
               $("#cekPM10").load("cekPM10.php") ;
               $("#cekCO").load("cekCO.php") ;
               $("#cekCO2").load("cekCO2.php") ;
            }, 1000 );
        } ); 
    </script>

    <!-- memanggil AreaChart atau grafik Realtime-->
    <script type="text/javascript">
        var refreshid = setInterval(function(){
            $("#AreaChart").load("chart-area-demo-p.php");
        }, 1000 );      
    </script>
    
</body>

</html>