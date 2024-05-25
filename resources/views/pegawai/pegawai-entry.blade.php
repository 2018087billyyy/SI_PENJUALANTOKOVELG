<!DOCTYPE html>
<html lang="en">

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
                <a class="nav-link" href="index.html">
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
                        <!-- Dropdown - User Information -->           
                    </li>


                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="form-login">
                        <form action="{{ url('/pegawai/store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="id_pegawai">ID pegawai</label>
                                <input class="form-control" type="text" name="id_pegawai" id="id_pegawai"
                                    placeholder="Masukkan ID pegawai" required />
                            </div>

                            <div class="form-group">
                                <label for="nama">NAMA pegawai</label>
                                <input class="form-control" type="text" name="nama_pegawai" id="nama_pegawai"
                                    placeholder="Masukkan Nama pegawai" required />
                            </div>

                            <div class="form-group">
                                <label for="alamat">ALAMAT</label>
                                <input class="form-control" type="text" name="alamat" id="alamat"
                                    placeholder="Masukkan Alamat" required />
                            </div>

                            <div class="form-group">
                                <label for="no_telp">NOMOR TELEPON</label>
                                <input class="form-control" type="number" name="no_telpon" id="no_telpon"
                                    placeholder="Masukkan Nomor Telepon" required />
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block" name="simpan">Simpan</button>
                            </div>
                        </form>
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
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="{{asset('Template/vendor/jquery/jquery.min.js')}}"></script>
            <script src="{{asset('Template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

            <!-- Core plugin JavaScript-->
            <script src="{{asset('Template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

            <!-- Custom scripts for all pages-->
            <script src="{{asset('Template/js/sb-admin-2.min.js')}}"></script>

            <!-- Page level plugins -->
            <script src="{{asset('Template/vendor/chart.js/Chart.min.js')}}"></script>

            <!-- Page level custom scripts -->
            <script src="{{asset('Template/js/demo/chart-area-demo.js')}}"></script>
            <script src="{{asset('Template/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>