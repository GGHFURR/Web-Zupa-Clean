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
                        <a href="home.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="services.php" class="nav-item nav-link">Services</a>
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
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">All in one House Cleaner Service to help you
                            </h1>
                            <p class="text-white pb-3 animated zoomIn">Kami hadir untuk membantu urusan menjaga properti
                                kesayangan anda, sekarang keterawatan tidaklah menjadi masalah bagimu, ayo gabung dan
                                nikmati layanan kebersihan tercepat dan termurah </p>
                            <a href="contact.php" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Contact
                                Us</a>
                            <a href="order.php" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Order Now</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid" src="img/jumbotron.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">About Us</h6>
                            <h2 class="mt-2">Jasa Layanan kebersihan terbaik</h2>
                        </div>
                        <p class="mb-4">Kepercayaan pengguna adalah visi dan misi kami, untuk itu kepuasan pelanggan
                            adalah titik paling tinggi dalam tingkat layanan</p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Rating pertama</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Mitra yang professional
                                </h6>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Dukungan 24/7</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Harga Bersahabat</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-4">
                            <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-md-end">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/rumah.png">
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Services</h6>
                    <h2 class="mt-2">Apa saja yang bisa kami lakukan?</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-home fa-2x"></i>
                            </div>
                            <h5 class="mb-3">House Cleaning</h5>
                            <p>Membersihan rumah kesayangan mu mulai dari Kamar, Ruang Tamu, Meja Makan, Dan lainnya</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="bi bi-badge-wc fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Toilet</h5>
                            <p>Membuat Kamar mandi seperti baru kembali dan membuat anda nyaman menggunakan nya</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="bi bi-flower1 fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Taman</h5>
                            <p>Malas membersihkan taman? biarkan mitra kami yang bekerja untuk membuat taman anda indah
                                di pandang dan bisa menikmati sepanjang hari</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl bg-primary testimonial wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Menjadi seorang gamer, sangat banyak menghabiskan waktu untuk game. oleh karna itu untuk
                            membersihkan kamar saya, saya menggunakan ZupaClean yang punya mitra tercepat dan harga yang
                            terjangkau</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/aceng.jpeg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Muhammad Fikri Kafili</h6>
                                <small>Baiter</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Sekarang, Saya sering aktif diluar rumah. mulai dari syuting iklan maupun syuting film. Hal
                            itu membuat saya tidak punya waktu untuk merawat rumah saya. Saya memilih mengunakan
                            ZupaCLean </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/aceng1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Muhammad Aceng Kafili</h6>
                                <small>Actor</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Saya menderita syndrom genshin-skuy, membuat saya malas untuk membersihkan kamar kos saya
                            sendiri. Dengan adanya Zupa Clean membuat kamar saya terlihat indah dalam sekejap saja</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/ija.jpeg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Ananda Myzza</h6>
                                <small>Genshin Addict</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Ya menurut saya, dengan kehadiran zupa clean saya bisa mudah mengatur jadwal saya tanpa
                            terganggu dengan kegiatan bebersih. Suami saya juga suka dengan ada nya Zupa Clean ini. GO
                            ZUPPA CLEAN!!!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/lesti.jpeg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Lesti Billar</h6>
                                <small>Artist</small>
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

</html>