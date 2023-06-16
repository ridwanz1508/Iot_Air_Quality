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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html; margin-top:50px">
                <div class="sidebar-brand-text mx-3">Air Quality Monitor</div>
            </a>        
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
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
                        <!-- divider-->
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
                    <h1 class="mt-4"><b>Informasi Tentang Udara</b></h1>
                    <h1 class="mt-4"></h1>

                    <div class="col-xl-12 col-lg-5">
                        <div class="text-dark mb-4" style= "text-align : justify">
                            <h6>
                                Nitrogen oksida (NOx) merupakan salah satu polutan yang banyak dihasilkan dari alat transportasi dan proses industri. Berdasarkan National Ambient 
                                Air Quality Standard (NAAQS) bahwa transportasi merupakan penyumbang emisi gas NOx terbesar. Gas nitrogen yang 
                                teroksidasi akan menjadi gas nitrogen monoksida (NO), selanjutnya jika oksidasi berlanjut, maka akan menghasilkan 
                                gas nitrogen dioskida (NO2). Bahaya nitrogen jika bereaksi dengan udara menghasilkan NO2 akan menyebabkan 
                                penyakit paru-paru, bronchoconstriction, menunda pemulihan saraf fungsi setelah stroke, bahkan komplikasi 
                                kognitif umum yang dihasilkan dari stroke.
                            </h6>
                        </div>
                    </div>       
             
                    <div class="col-xl-12 col-lg-5">
                        <div class="text-dark mb-4" style= "text-align : justify">
                            <h6>
                                Selain gas NO2, zat pencemar udara lainnya yang berasal dari alat transportasi termasuk peralatan bertenaga diesel, 
                                aktifitas industri lokal dan pembangkit listrik yaitu materi partikulat (PM). Materi pertikulat tidak dapat dilihat 
                                dengan mata telanjang karena yang berukuran kecil berkisar antara 1 mikron sampai dengan 500 mikron. Partikulat halus 
                                dapat terikat dengan uap air juga dikenal sebagai kelarutan total partikulat atau partikel Total Suspended Particulates 
                                (TSP) yang merupakan bentuk pencemaran berbahaya. Efek dari partikulat pada kesehatan manusia seperti gejala asma, batuk 
                            dan berefek pada lingkungan yang bervariasi dengan susunan fisik dan kimia dari partikulat.
                            </h6>
                        </div>
                    </div>    
                    
                    <div class="col-xl-12 col-lg-5">
                        <div class="text-dark mb-4" style= "text-align : justify">
                            <h6>
                                 Karbon monoksida (CO) adalah gas yang tidak berwarna, tidak berasa, tidak mengiritasi dan tidak berbau.Gas ini dihasilkan 
                                 melalui pembakaran gas, minyak, petrol, bahan bakar padat atau kayu, oven dan mesin Bahaya utama terhadap kesehatan adalah 
                                 mengakibatkan gangguan pada darah. Ketika udara mengandung karbon monoksida tinggi, maka tubuh akan menggantikan oksigen 
                                 pada sel darah merah dengan karbon monoksida. Hal ini bisa mengakibatkan kerusakan jaringan yg berfokus serta bahkan 
                                 menyebabkan kematian. Batas pemaparan karbon monoksida yang diperbolehkan oleh OSHA (Occupational Safety and Health 
                                 Administration) adalah 35 ppm untuk waktu 8 jam/hari kerja.
                            </h6>
                        </div>
                    </div> 

                    <div class="col-xl-12 col-lg-5">
                        <div class="text-dark mb-4" style= "text-align : justify">
                            <h6>
                                CO2 adalah Senyawa/bahan kimia yang terbentuk dari 1 atom karbon + 2 atom oksigen, yang dapat dihasilkan baik dari kegiatan alamiah 
                                maupun kegiatan manusia. Pembakaran dari semua bahan bakar yang mengandung karbon, seperti metana (gas alam), distilat minyak bumi 
                                (bensin, diesel, minyak tanah, propana), arang dan kayu hendak menghasilkan karbon dioksida. Misalnya reaksi antara metana dan oksigen: 
                                CH4 + 2 O2 → CO2 + 2 H2O. Paparan CO2 dalam jumlah yang tinggi bisa berbahaya untuk kesehatan. Hal itu bisa menyebabkan hiperkapnia 
                                atau keracunan karbon dioksida. Tanda-tanda keracunan CO2, antara lain mual, muntah, pusing, pernapasan meningkat, dan detak jantung cepat.
                            </h6>
                        </div>
                    </div> 

                    <h1 class="mt-4"><b>Indeks Standar Pencemar Udara</b></h1>
                    <h1 class="mt-4"></h1>
                    <div class="col-xl-12 col-lg-5">
                        <div class="text-dark" style= "text-align : justify">
                            <h6>
                                Indeks standar kualitas udara yang dipergunakan secara resmi di Indonesia adalah Indeks Standar Pencemaran Udara (ISPU) sesuai dengan 
                                Keputusan Menteri Lingkungan Hidup Nomor KEP 45/MENLH/10/1997 dan KEP-107/KABAPEDAL/11/1997. Selain itu, terdapat Peraturan Menteri Kesehatan 
                                Republik Indonesia Nomor 1077/Menkes/Per/V/2011 tentang pedoman penyehatan kualitas udara dalam ruang atau luar ruang yang telah diatur menggunakan indeks ISPU.
                            </h6>
                        </div>  
                        <img src="img/tabel-ispu-new.png" class="mb-4">
                    </div>
                </div>
                <!-- /.container-fluid -->

                <!-- Footer -->
                <footer class="sticky-footer bg-gradient-light shadow">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Dipersembahkan Oleh &copy; Jurusan Fisika Fakultas MIPA Universitas Lampung</span>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- End of Main Content -->
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
</body>

</html>