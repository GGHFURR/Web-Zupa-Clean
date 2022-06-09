<?php

include('config.php');
session_start();


$temp = $_SESSION['username'];
$query = "SELECT gambar FROM admin WHERE username='$temp';";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

/* Baca data mahasiswa*/
function readData()
{
    global $conn;
    $query = 'SELECT * FROM data_pesanan ORDER BY  id_pesanan DESC';

    $result = mysqli_query($conn, $query);

    $records = [];

    while ($record = mysqli_fetch_assoc($result)) {
        $records[] = $record;
    }

    return $records;
}

$records = readData();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mitra Zupa Clean - Home Cleaning Service</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link href="img/logo.ico" rel="icon">
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo text-white" href="index.html">
                    <h2>Zupa Clean</h2>
                </a>
                <a class="sidebar-brand brand-logo-mini text-white" href="index.html">Z</a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle " src="./img/<?= $row['gambar'] ?>" alt="">
                                <span class="count bg-success"></span>
                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal"><?= $_SESSION['username']; ?></h5>
                            </div>
                        </div>
                        <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-settings text-primary"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-onepassword  text-info"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-calendar-today text-success"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="mitra.php">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item nav-settings d-none d-lg-block">
                            <a class="nav-link" href="#">
                                <i class="mdi mdi-view-grid"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown border-left">
                            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-email"></i>
                                <span class="count bg-success"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                                <h6 class="p-3 mb-0">Messages</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">

                                    <p class="preview-subject ellipsis mb-1">Tidak Ada Pesan</p>

                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown border-left">
                            <a class="nav-link" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                                <i class="mdi mdi-bell"></i>
                                <span class="count bg-danger"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                                <h6 class="p-3 mb-0">Notifications</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <p class="preview-subject ellipsis mb-1">Tidak Ada Notifikasi</p>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">See all notifications</p>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                                <div class="navbar-profile">
                                    <img class="img-xs rounded-circle" src="./img/<?= $row['gambar']; ?>" alt="">
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?= $_SESSION['username']; ?></p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                                <h6 class="p-3 mb-0">Profile</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-settings text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Settings</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="logout.php" class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-logout text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Log out</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">Advanced settings</p>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Order Status</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>

                                                    <th>No</th>
                                                    <th>ID Pesanan</th>
                                                    <th>Tanggal Pesan</th>
                                                    <th>Nama Customer</th>
                                                    <th>No Hp</th>
                                                    <th>Jenis Jasa</th>
                                                    <th>Metode Bayar</th>
                                                    <th>Lama Sewa</th>
                                                    <th>Alamat</th>
                                                    <th>Catatan</th>
                                                    <th>Username</th>
                                                    <th>Total</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $no = 1;
                                            foreach ($records as $record) :
                                            ?>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <?= $no; ?>
                                                        </td>
                                                        <td><?= $record['id_pesanan'] ?></td>
                                                        <td><?= $record['tgl'] ?></td>
                                                        <td><?= $record['nama_customer'] ?></td>
                                                        <td><?= $record['no_hp'] ?></td>
                                                        <td><?= $record['jenis_layanan'] ?></td>
                                                        <td><?= $record['cara_bayar'] ?></td>
                                                        <td><?= $record['lama_sewa'] ?></td>
                                                        <td><?= $record['alamat'] ?></td>
                                                        <td><?= $record['catatan'] ?></td>
                                                        <td><?= $record['username_session'] ?></td>
                                                        <td>Rp. <?= $record['total'] ?></td>
                                                        <td>
                                                            <?php
                                                            if ($record['status'] == 'belum disetujui') {
                                                            ?>
                                                                <div class="badge badge-outline-danger">
                                                                    <?= $record['status'] ?>
                                                                </div>
                                                            <?php
                                                            }
                                                            ?>
                                                            <?php
                                                            if ($record['status'] == 'sudah disetujui') {
                                                            ?>
                                                                <div class="badge badge-outline-success">
                                                                    <?= $record['status'] ?>
                                                                </div>
                                                            <?php
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <button class="badge badge-outline-danger" name="approve"><a href='update_status.php?id=<?php echo $record['id_pesanan']; ?>'>
                                                                    Approve</a>
                                                            </button>
                                                        </td>

                                                    </tr>


                                                </tbody>
                                            <?php
                                                $no++;
                                            endforeach;
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Zupa
                                Clean - Home Cleaning Service</span>
                        </div>
                    </footer>

                </div>

            </div>

        </div>

        <script src="assets/vendors/js/vendor.bundle.base.js"></script>

        <script src="assets/vendors/chart.js/Chart.min.js"></script>
        <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
        <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
        <script src="assets/js/off-canvas.js"></script>
        <script src="assets/js/hoverable-collapse.js"></script>
        <script src="assets/js/misc.js"></script>
        <script src="assets/js/settings.js"></script>
        <script src="assets/js/todolist.js"></script>

        <script src="assets/js/dashboard.js"></script>

</body>

</html>