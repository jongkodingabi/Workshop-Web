<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
header('Location: index.html');
       exit;
}
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

    <title>Daniel Admin - Home</title>

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
         <ul class="navbar-nav bg-warning sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                <img width="50px;" height="50px;" src="/bengkel/logodanielmotor.jpg" />
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

                        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Produk</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Check Produk:</h6>
                    <a class="collapse-item" href="produk.php">Product</a>
                    <a class="collapse-item" href="produkmobil.php">Produk Mobil</a>
                    <a class="collapse-item" href="histori_pembelian.php">Histori Pembelian</a>
                </div>
            </div>
        </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="ulasan.php">Ulasan</a>
                        <a class="collapse-item" href="icon.php">Icon</a>
                        <a class="collapse-item" href="servis.php">Servis</a>
                        <a class="collapse-item" href="about.php">About</a>
                        <a class="collapse-item" href="testimoni.php">Testimoni</a>
                        <a class="collapse-item" href="news.php">News</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Account</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Others:</h6>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="datauser.php">Admin User</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts --
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables --
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
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
                <nav class="navbar navbar-expand navbar-light bg-danger topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3 bg-danger>
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <div class="sidebar-brand-text mx-5 text-white">Daniel Admin</div>
                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto bg-danger">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none bg-danger">
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
                        
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white small"> <?=$_SESSION['name']?></span>
                                <img class="img-profile rounded-circle"
                                    src="/bengkel/person.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <body>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="css/formedit.css" rel="stylesheet" type="text/css">
    <?php
include "koneksi.php";

// Tangkap id yang akan diedit
if(isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die('Data tidak ditemukan!');
}

// Inisialisasi variabel
$gambar = ""; 
$produk = ""; 
$harga = "";

// Ambil data dari database
$sql = "SELECT * FROM tblprodukmobil WHERE id='$id'";
$result = mysqli_query($conn, $sql);

// Jika id tidak ditemukan
if(mysqli_num_rows($result) == 0) {
    die('Data tidak ditemukan!');
}

// Mendapatkan data produk
while($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $gambar = $row['gambar'];
    $produk = $row['produk'];
    $harga = $row['harga'];
}

// Jika form disubmit untuk penyuntingan
if(isset($_POST['Edit'])) {
    // Tangkap data dari form
    $id = $_POST['id'];
    $gambar = $_POST['gambar'];
    $produk = $_POST['produk'];
    $harga = $_POST['harga'];
    
    // Update data produk di database
    $sql = "UPDATE tblprodukmobil SET gambar='$gambar', produk='$produk', harga='$harga' WHERE id='$id'";
    $hasil = mysqli_query($conn, $sql);
    
    // Periksa apakah query berhasil dieksekusi
    if (!$hasil) {
        echo '<script language="javascript">';
        echo 'alert("Data tidak berhasil disimpan!")';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Data berhasil disimpan!")';
        echo '</script>';
    }
    
    // Alihkan kembali ke halaman produk.php
    echo '<script language="javascript">';
    echo 'window.location.href ="produkmobil.php"';
    echo '</script>';
}
?>

<form action="" method="post">
<center>
<table border="0" cellspacing="0" cellpadding="5">
<tr>
<td colspan="2"><center>Edit Produk Mobil</center></td>
</tr>
<tr>
<td>ID</td> <td><input type="text" name="id" value="<?php echo $id;?>"
readonly></td>
</tr>
<tr>
<td>Produk</td> <td><input type="file"  name="gambar" value="<?php 
echo $gambar;?>"></td>
</tr>
<tr>
<td>Nama Produk</td> <td><input type="text" name="produk" value="<?php echo
$produk;?>"></td>
</tr>
<tr>
<td>Harga</td> <td><input type="text" name="harga" value="<?php echo
$harga;?>"></td>
</tr>
</tr>
<tr>
<td colspan="2">
<center>
<input type="submit" value="Edit" name="Edit">
</center>
</td>
</tr>
</table>
</center>
</form>
</body>

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
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
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