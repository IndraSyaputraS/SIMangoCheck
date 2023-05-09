<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Pakar</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="assets/css/styles.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/48fe8ef76a.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3"><img src="/assets/assets/img/simangocheck.png" width="25%"> SIMangoCheck</a>
        {{-- <a class="navbar-brand ps-3"><i class="fas fa-mango"></i>SIMangoCheck</a> --}}
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        {{-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">            
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form> --}}
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="{{ route('welcome') }}">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    @yield('sidebar')
    {{-- <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" style="color : #F5FEFD;" href="{{ route('layout') }}">
                            <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" style="color : #F5FEFD;" href="{{ route('penyakit') }}">
                            <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-disease"></i></div>
                            Penyakit
                        </a>
                        <a class="nav-link" style="color : #F5FEFD;" href="{{ route('hama') }}">
                            <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-spaghetti-monster-flying"></i></div>
                            Hama
                        </a>
                        <a class="nav-link" style="color : #F5FEFD;" href="{{ route('obat') }}">
                            <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-pills"></i></div>
                            Obat
                        </a>
                        <a class="nav-link" style="color : #F5FEFD;" href="{{ route('gejala') }}">
                            <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-newspaper"></i></div>
                            Gejala
                        </a>
                        <a class="nav-link" style="color : #F5FEFD;" href="{{ route('aturan') }}">
                            <div class="sb-nav-link-icon" style="color : #F5FEFD;"><i class="fas fa-book-open"></i></div>
                            Aturan
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Pakar
                </div>
            </nav>
        </div> --}}
        <div id="layoutSidenav_content">
            <main>
                @yield('dashboard')
                @yield('content')
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; 2118099 Indra Syaputra Stiansyah</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/assets/demo/chart-area-demo.js"></script>
    <script src="assets/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/datatables-simple-demo.js"></script>
</body>
</html>
