<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin dahsboard</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
    <link href="/assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <style>
        * {
            box-sizing: border-box;
        }
  
        .table {
            width: 100%;
            border-collapse: collapse;
        }
  
        .table td,
        .table th {
            text-align: center;
        }
  
        .table th {
            background-color: #1D5576;
            color: white;
        }
  
        .table tbody:nth-child(even) {
            background-color: #f5f5f5;
        }
  
        /* Ini Responsivenya */
        @media (max-width: 768px) {
            .table thead {
                display: none;
            }
  
            .table,
            .table tbody,
            .table tr,
            .table td {
                display: block;
                width: 100%;
            }
  
            .table tr {
                margin-bottom: 15px;
            }
  
            .table td {
                text-align: right;
                position: relative;
            }
  
            .table td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-size: 15px;
                font-weight: bold;
                text-align: left;
            }
  
        }
  
        @media (max-width: 500px) {
            .table thead {
                display: none;
            }
  
            .table,
            .table tbody,
            .table tr,
            .table td {
                display: block;
                width: 100%;
            }
  
            .table tr {
                margin-bottom: 15px;
            }
  
            .table td {
                text-align: right;
                position: relative;
            }
  
            .table td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-size: 15px;
                font-weight: bold;
                text-align: left;
            }
  
        }
  
        /* End Responsive */
  
        .title {
            color: #adadad;
            text-align: center;
  
        }
  
        .subtitle a {
            color: white;
            text-decoration: none;
            float: left;
            padding-top: 1px;
        }
  
        .subtitle a:hover {
            color: #dbd7e6;
            text-decoration: none;
  
        }
  
        .form-control {
            width: 200px;
        }
  
        @media (max-width: 500px) {
            .subtitle a {
                font-size: 15px;
                padding-top: 3px;
            }
  
            .form-control {
                width: 90px;
            }
        }
        
        @media (max-width: 768px) {
            .subtitle a {
                padding-top: 1px;
            }
            
            .form-control {
                width: 130px;
            }
        }
  
        .btn .btn-drop {
            background-color: #1D5576;
            color: white
        }
     
        
    </style>
</head>

<body id="page-top" >
    @include('sweetalert::alert')
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #1D5576; color: white;">

            <!-- Sidebar - Brand -->
            @if(Auth::check())
            <a class="sidebar-brand justify-content-center" href="index.html" style="color:white;">
                <div class="sidebar-brand-icon rotate-n-15">
                    
                </div>
                <div class="sidebar-brand-text">{{ Auth::user()->name}}</div>
                
            </a>
            <span class="text-muted d-flex align-self-center justify-content-center">{{ Auth::user()->level}}</span>
            @endif
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('dashboard.index') }}">
                 
                    <span class="badge rounded-pill bg-success float-end"></span>
                    <i class="fa-solid fa-burger-soda"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('product.index') }}">
                    <span class="badge rounded-pill bg-success float-end"></span>
                    <i class="fa-solid fa-burger-soda"></i>
                    <span>Produk</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('pelanggan.index') }}">
                    <span class="badge rounded-pill bg-success float-end"></span>
                    <i class="fa-solid fa-burger-soda"></i>
                    <span>Pelanggan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/stok/') }}">
                    <span class="badge rounded-pill bg-success float-end"></span>
                    <i class="fa-solid fa-list-check"></i>
                    <span>Stok</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/outlet/') }}">
                    <span class="badge rounded-pill bg-success float-end"></span>
                    <i class="fa-solid fa-list-check"></i>
                    <span>Outlets</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/transaksi/') }}">
                    <span class="badge rounded-pill bg-success float-end"></span>
                    <i class="bi bi-gear-fill"></i>
                    <span>list transaksi</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/report/') }}">
                    
                <i class="bi bi-currency-dollar"></i>
                    <span>Laporan</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                   @yield('search')

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-drop btn-primary" type="button">
                                             <i class="bi bi-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        

                        <!-- Nav Item - Messages -->
                       
                        <!-- Nav Item - User Information -->
                        {{-- <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('Backend/assets/images/users/avatar.png') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Kembali
                                </a>
                            </div>
                        </li> --}}

                        @can('admin')
                            <div class="dropdown d-inline-block user-dropdown">
                                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <a class="nav-link" style="color: #1D5576" href="/register"><b>Selamat Datang Admin {{ Auth::user()->name }}</b></a>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger" style="margin-left: 40px;">Logout</button>
                                    </form>
                                </div>
                            </div>
                        @endcan
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                   
                        @yield('button')
                    </div>
                    <div>
                        @yield('isi')
                    </div>
                </div>
                <!-- End of Content Wrapper -->

          
     </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
   
    

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/chart-area-demo.js"></script>
    <script src="/js/demo/chart-pie-demo.js"></script>

</body>

</html>