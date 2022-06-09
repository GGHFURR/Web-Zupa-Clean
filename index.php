<?php

include 'config.php';

error_reporting(0);

session_start();



if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    if ($email != '' && $password != '') {
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            setcookie("message", "", time() - 60); //delete cookie message
            header("Location: berhasil_login.php");
        } else {
            //buat sebuah cookie untuk menampung data pesan kesalahan
            setcookie("message", "Maaf, Username atau Password salah", time() + 60);
            header("location: index.php"); //Redirect kembali ke halaman index.php
            //echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
        }
    } else {
        setcookie("message", "Username atau Password kosong", time() + 60);
        header("location: index.php"); //Redirect kembali ke halaman index.php
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Zupa Clean - Home Cleaning Service</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="img/logo.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
    <link href="img/logo.ico" rel="icon">
    <title>Zupa Clean | Login</title>
</head>
<link rel="shortcut icon" href="favicon.ico">

<body>
    <div class="container-xxl bg-primary p-0">
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
            </nav>
            <div class="container-xxl py-2 bg-primary hero-header ">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-6 offset-md-3 text-center">
                            <div class="card text-center animated zoomIn">
                                <div class="card-body p-lg-5 ">
                                    <form action="" method="POST" class="login-email">
                                        <p class="login-text text-primary mt-3"
                                            style="font-size: 2rem; font-weight: 800;">Login
                                        </p>
                                        <div style="color: red; margin-bottom: 15px; text-align: center;">
                                            <?php
                                            //cek apakah terdapat cookie dengan nama message
                                            if (isset($_COOKIE["message"])) { //jika ada
                                                echo $_COOKIE["message"]; //tampilkan pesannya
                                            }
                                            ?>
                                        </div>
                                        <div class="input-group mt-3">
                                            <input type="email" class="form-control" placeholder="Email" name="email"
                                                value="<?php echo $email; ?>">
                                        </div>
                                        <div class="input-group mt-3">
                                            <input type="password" class="form-control" placeholder="Password"
                                                name="password" value="<?php echo $_POST['password']; ?>">
                                        </div>
                                        <button name="submit" class="btn btn-primary text-center my-3">Login</button>

                                        <p class="login-register-text">Anda belum punya akun? <a
                                                href="register.php">Register</a></p>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>