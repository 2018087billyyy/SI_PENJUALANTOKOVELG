<!DOCTYPE html>
<html lang="en">

<style>

 /* Style the dropdown menu */
 .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Show the dropdown menu when hovering over the parent dropdown */
        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
        }

        /* Style the dropdown items */
        .dropdown-item {
            display: block;
            padding: 12px 16px;
            text-decoration: none;
            color: #333;
            text-transform: uppercase;
        }

        /* Change background color of dropdown items on hover */
        .dropdown-item:hover {
            background-color: #f9f9f9;
        }

    .card {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #f9f9f9;
    }

    .table-data {
        width: 100%;
        border-collapse: collapse;
    }

    .table-data th,
    .table-data td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .table-data th {
        background-color: #f2f2f2;
    }

    .table-data tr:hover {
        background-color: #f5f5f5;
    }

    .table-data td a {
        text-decoration: none;
        color: #007bff;
        margin-right: 10px;
    }

    .table-data td a:hover {
        text-decoration: underline;
    }

    .table-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px; /* Add some bottom margin to create space */
    }
</style>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WEB ADMIN BAKOL VELG</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('Template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('Template/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- dropdown -->
    <script>
        function toggleDropdown() {
            var dropdownMenu = document.getElementById("dropdownMenu");
            if (dropdownMenu.style.display === "none") {
                dropdownMenu.style.display = "block";
            } else {
                dropdownMenu.style.display = "none";
            }
        }

        function logout() {
            // Tambahkan logika logout di sini
            console.log("Logout clicked");
            // Misalnya, redirect ke halaman logout
            window.location.href = "/logout";
        }
    </script>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ADMIN BAKOL VELG <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                MENU
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="/pegawai">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>DATA PEGAWAI</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="/customer">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>DATA CUSTOMER</span>
                </a>
            </li> 
            <li class="nav-item">
                <a class="nav-link collapsed" href="/pembelian">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>DATA PEMBELIAN</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/penjualan">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>DATA PENJUALAN</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/barang">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>DATA BARANG</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="/pemasukan">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>DATA PEMASUKAN</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/pengeluaran">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>DATA PENGELUARAN</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/suplier">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>DATA SUPLIER</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->


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


                    <!-- Topbar Navbar -->


                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow ml-auto"> <!-- Tambahkan kelas 'ml-auto' -->
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            aria-haspopup="true" aria-expanded="false" onclick="toggleDropdown()">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">BAKOL VELG</span>
                            <img class="img-profile rounded-circle" src="{{asset('Template/img/undraw_profile.svg')}}"
                                alt="Profile Picture">
                        </a>                     
                    </li>


                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="table-container">
                        <div> <!-- Empty div to push button to the right -->
                        <a href="/pegawai/tambah" class="btn btn-primary btn-tambah">
                            <span class="icon-plus"></span> Tambah Data
                        </a>
                    </div>
                    </div>
                    <!-- Page Heading -->
                    <div class="card">
                        <table class="table-data table-bordered">
                            <thead>
                                <tr>
                                    <th>ID PEGAWAI</th>
                                    <th>NAMA PEGAWAI</th>
                                    <th>ALAMAT</th>
                                    <th>NOMOR TELEPON</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pegawai as $data)
                                    <tr>
                                        <td>{{ $data->id_pegawai }}</td>
                                        <td>{{ $data->nama_pegawai }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>{{ $data->no_telpon }}</td>
                                        <td>
                                            <a href="/pegawai/edit/{{ $data->id_pegawai }}">Edit</a>
                                            <a href="/pegawai/hapus/{{ $data->id_pegawai }}">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                    <!-- End of Content Wrapper -->

                </div>
                <!-- End of Page Wrapper -->

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>


                <!-- Bootstrap core JavaScript-->
                <script src="Template/vendor/jquery/jquery.min.js"></script>
                <script src="Template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

                <!-- Core plugin JavaScript-->
                <script src="Template/vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="Template/js/sb-admin-2.min.js"></script>

                <!-- Page level plugins -->
                <script src="Template/vendor/chart.js/Chart.min.js"></script>

                <!-- Page level custom scripts -->
                <script src="Template/js/demo/chart-area-demo.js"></script>
                <script src="Template/js/demo/chart-pie-demo.js"></script>

</body>

</html>