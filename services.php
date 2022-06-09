<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Zupa Clean - Home Cleaning Service</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="img/logo.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0"> <img src="img/logo.png" alt="Logo"><span class="fs-5">Zupa Clean</span></h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">

                    <div class="navbar-nav ms-auto py-0">
                        <a href="home.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="services.php" class="nav-item nav-link  active">Services</a>
                        <a href="order.php" class="nav-item nav-link">Order</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>


                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <button type="button" class="btn text-light btn-lg ms-2"><i class="bi bi-person-circle" width="20"></i></button>
                            <ul class="dropdown-menu dropdown-menu-primary" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated zoomIn">Services</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="career.php">Pages</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="career.php">Services</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Services</h6>
                    <h2 class="mt-2">Jenis Layanan yang tersedia</h2>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-5" id="portfolio-flters">
                            <li class="btn px-3 pe-4 active" data-filter="*">Semua</li>
                            <li class="btn px-3 pe-4" data-filter=".house">House</li>
                            <li class="btn px-3 pe-4" data-filter=".toilet">Toilet</li>
                            <li class="btn px-3 pe-4" data-filter=".taman">Taman</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-4 portfolio-container">
                    <div class=" portfolio-item house wow zoomIn" data-wow-delay="0.1s">
                        <div class="container-xxl py-5">
                            <div class="container px-lg-5">
                                <div class="row g-5">
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="section-title position-relative mb-4 pb-2">
                                            <h2 class="mt-2">House Cleaning Service</h2>
                                        </div>
                                        <p class="mb-4"> House Cleaning adalah pelayanan dari kami yang paling dicari-cari oleh pelanggan.
                                            Layanan ini mengcakup :
                                        <ul>
                                            <li>Kamar Tidur</li>
                                            <li>Ruang Tamu</li>
                                            <li>Ruang Tengah</li>
                                            <li>Ruang Makan</li>
                                        </ul>
                                        Akan tetapi tidak mengcakup :
                                        <ul>
                                            <li>Kamar Mandi</li>
                                            <li>Halaman Rumah</li>
                                            <li>Gudang</li>
                                        </ul>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.5s" src="img/house.jpg">
                                        <h4 class="py-4 text-center"><i class="bi bi-cash"></i> IDR 29.999/Jam</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" portfolio-item toilet wow zoomIn" data-wow-delay="0.1s">
                        <div class="container-xxl py-5">
                            <div class="container px-lg-5">
                                <div class="row g-5">
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="section-title position-relative mb-4 pb-2">
                                            <h2 class="mt-2">Toilet Cleaning Service</h2>
                                        </div>
                                        <p class="mb-4"> Layanan Ini dikhusukan bagi anda yang memerlukan bantuan dalam membersihkan toilet
                                            kesayangan anda. Toilet Cleaning Service membuat toilet anda menjadi nyaman dan bersih untuk digunakan,
                                            membuat anggota keluarga merasa nyaman dan tenang.
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.5s" src="img/toilet.jpg">
                                        <h4 class="py-4 text-center"><i class="bi bi-cash"></i> IDR 14.999/Jam</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" portfolio-item taman wow zoomIn" data-wow-delay="0.1s">
                        <div class="container-xxl py-5">
                            <div class="container px-lg-5">
                                <div class="row g-5">
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="section-title position-relative mb-4 pb-2">
                                            <h2 class="mt-2">Garden Cleaning Service</h2>
                                        </div>
                                        <p class="mb-4"> Garden Cleaning Service merupakan layanan membersihkan halaman rumah atau properti
                                            kesayangan anda. Layanan ini membuat halaman anda terjaga baik itu dari hama, kerusakan, bahkan
                                            dari ketidakindahan halaman anda
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.5s" src="img/taman.png">
                                        <h4 class="py-4 text-center"><i class="bi bi-cash"></i> IDR 19.999/Jam</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <h5 class="text-white mb-4">Semakin Dekat</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Jl. Geger Arum No.1</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+82 1378 250 442</p>
                        <p><i class="fa fa-envelope me-3"></i>Zupaclean@info.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <h5 class="text-white mb-4">Popular Link</h5>
                        <a class="btn btn-link" href="about.php">About Us</a>
                        <a class="btn btn-link" href="contact.php">Contact Us</a>
                        <a class="btn btn-link" href="career.php">Career</a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <h5 class="text-white mb-4">Info Menarik</h5>
                        <p>Untuk Mengikuti aktivitas terbaru kami, kami dapat memberi kabar terbaru kepada anda</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Masukkan Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            © <a class="border-bottom" href="https://www.instagram.com/gghfurr/">Ghhfurr.Budiman.fun</a>, All Right Reserved.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="home.php">Home</a>
                                <a href="order.php">Order</a>
                                <a href="career.php">Career</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="js/main.js"></script>
</body>