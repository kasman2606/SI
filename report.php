<?
//Panggil Koneksi Database
include "koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LaporSI</title>

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
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                
                <div class="sidebar-brand-text mx-3">LaporSI<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            
            <!-- Nav Item - Pages Collapse Menu -->
            
            

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
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">kasman</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Pengaturan
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Aktivitas
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                     <h1 class="h3 mb-2 text-gray-800">Report</h1>
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah Data
</button>

<!-- Modal -->
<div class="modal fade-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Form Laporan</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="aksi_crud.php">
            <form>
      <div class="modal-body">
      <div class="row">
    <div class="col">
  <div class="form-group">
    <label for="exampleFormControlInput1"><B>Nama APK/WEB</B></label>
    <input type="text" class="form-control" tnama="exampleFormControlInput1" placeholder=" apk/web">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1"><b>Pelapor Divisi/User</b></label>
    <input type="text" class="form-control" tlapor="exampleFormControlInput1" placeholder="nama pelapor">
  </div>
    </div>
    <div class="col-md-6">
  <div class="form-group">
    <label for="exampleFormControlInput1"><b>Tanggal Masalah</b></label>
    <input type="date" class="form-control" ttgl="exampleFormControlInput1" placeholder="tgl/bln/thn">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1"><b>Server</b></label>
    <select class="form-control" tserver="exampleFormControlSelect1">
      <option>Garuda</option>
      <option>Jaghost</option>
      <option>AWS</option>
    </select>
  </div>
</div>
<div class="col-md-6">
  <div class="form-group">
    <label for="exampleFormControlInput1"><b>Keluhan Masalah</b></label>
    <input type="text" class="form-control" tmasalah="exampleFormControlInput1" placeholder="keluhan">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1"><b>Screenshot masalah</b></label>
    <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="masalah">
  </div>
</div>
<div class="col-md-6">
  <div class="form-group">
    <label for="exampleFormControlInput1"><b>Solusi Masalah</b></label>
    <input type="text" class="form-control" tSM="exampleFormControlInput1" placeholder="solusi">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1"><b>Lama Waktu Fixing</b></label>
    <input type="text" class="form-control" twaktu="exampleFormControlInput1" placeholder="lama waktu">
  </div>
</div>
<div class="col-md-6">
  <div class="form-group">
    <label for="exampleFormControlSelect1"><b>Skala Masalah</b></label>
    <select class="form-control" tskala="exampleFormControlSelect1">
      <option> Kecil </option>
      <option>Sedang</option>
      <option>Besar</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1"><b>Priority</b></label>
    <select class="form-control" tpriority="exampleFormControlSelect1">
      <option> Kecil </option>
      <option>Sedang</option>
      <option>Besar</option>
    </select>
  </div>
</div>
<div class="col-md-6">
  <div class="form-group">
    <label for="exampleFormControlInput1"><b>Nama Tim Bertugas</b></label>
    <input type="text" class="form-control" ttim="exampleFormControlInput1" placeholder="nama tim">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1"><b>Costumer Support</b></label>
    <input type="text" class="form-control" tCS="exampleFormControlInput1" placeholder="nama costumer">
  </div>
</div>

      </div>
        ...
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" data-dismiss="modal">Keluar</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
            
        </form>
    </div>
  </div>
</div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama APK/WEB</th>
                                            <th>Pelapor Divisi/User</th>
                                            <th>Tanggal Masalah</th>
                                            <th>Server</th>
                                            <th>Keluhan Masalah</th>
                                            <th>Screenshot Masalah</th>
                                            <th>Solusi Masalah</th>
                                            <th>Lama Waktu Fixing</th>
                                            <th>Skala masalah</th>
                                            <th>Priority</th>
                                            <th>Nama tim bertugas</th>
                                            <th>Costumer Support</th>
                                        </tr>
                                    <?
                                    //persiapan menampilkan data
                                    
                                    
                                    ?>
                                        <tr>
                                            <td>1</td>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>

                                        </tr>
                                       
                                    </tbody>
                                </table>



                            </div>
                        </div>
                    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>