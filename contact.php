<?php
include "koneksi.php";

if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO tabel_adamcom (name, email, message) VALUES ('$name', '$email', '$message')";

    if(mysqli_query($koneksi, $query)){
        echo "<script>
                document.addEventListener('DOMContentLoaded', function(event) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: 'Data Berhasil Disimpan',
                        confirmButtonText: 'OK'
                    }).then(function() {
                        window.location = 'index.html';
                    });
                });
              </script>";
    } else {
        echo "<script>
                document.addEventListener('DOMContentLoaded', function(event) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal!',
                        text: 'Data Gagal Disimpan',
                        confirmButtonText: 'OK'
                    }).then(function() {
                        window.location = 'contact.php';
                });
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ADAM COM. | Mobile & Desktop Service</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

     <!-- Primary Meta Tags -->
     <title>ADAM COM. | Mobile & Desktop Service</title>
     <meta name="title" content="ADAM COM. | Mobile & Desktop Service" />
     <meta name="description" content="Mobile and Desktop Service" />
 
     <!-- Open Graph / Facebook -->
     <meta property="og:type" content="website" />
     <meta property="og:url" content="" />
     <meta property="og:title" content="ADAM COM. | Mobile & Desktop Service" />
     <meta property="og:description" content="Melayani service perangkat Mobile dan Desktop" />
     <meta property="og:image" content="https://i.postimg.cc/PJ9svvr3/Screenshot-2024-08-31-001231-11zon.png" />
 
 
     <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png" />
     <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png" />
     <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png" />
     <link rel="manifest" href="favicon/site.webmanifest" />
 

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- JavaScript untuk validasi form -->
    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var message = document.getElementById("message").value;

            if (name == "" || email == "" || message == "") {
                alert("Isi data form terlebih dahulu");
                return false;
            }
            return true;
        }
    </script>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-light text-primary d-none d-lg-flex">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="index.html">
                    <img src="img/logo.png" alt="Post" width="200" height="55">
                </a>
                <div class="ms-auto d-flex align-items-center">
                    <small class="ms-4"><i class="fa fa-envelope me-3"></i>adambani707@gmail.com</small>
                    <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>+62857-0916-0075</small>
                    <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="https://web.facebook.com/adam.reckhabanni"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="https://www.instagram.com/baniadam_tech"><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="https://wa.me/6285709160075"><i
                                class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <img src="img/logo.png" alt="Post" width="200" height="55">
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="index.html" class="nav-item nav-link"><img src="img/logo2.png" alt="Post" width="32" height="30"></a>
                        <a href="index.html" class="nav-item nav-link">Beranda</a>
                        <a href="about.html" class="nav-item nav-link">Tentang</a>
                        <a href="service.html" class="nav-item nav-link">Layanan</a>
                        <a href="project.html" class="nav-item nav-link">Proyek</a>
                        <div class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Halaman</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="lihat_data.php" class="dropdown-item">Kritik dan Saran</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link active">Kontak</a>
                    </div>
                    <div class="ms-auto d-none d-lg-block">
                        <a href="https://www.adamdev.my.id" target="_blank" class="btn btn-primary rounded-pill py-2 px-3">Layanan Website</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Hubungi Kami</h1>
            <nav aria-label="breadcrumb animated slideInDown">
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-4">Formulir Kritik dan Saran</h3>
                    <p class="mb-4">Silahkan tinggalkan pesan anda pada kolom yang tersedia</a>.</p>
                    <form action="" method="post" onsubmit="return validateForm()">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Nama Anda</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">E-Mail Anda</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="message" class="form-control" placeholder="Leave a message here" id="message" style="height: 200px"></textarea>
                                    <label for="message">Pesan</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-2 px-3" type="submit" name="submit">Kirim Pesan</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h3 class="mb-4">Alamat dan Kontak</h3>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Alamat</h6>
                            <span>Jl. Gunung Krakatau, Gang Permai II, No. 7, Kec. Teluk Betung Selatan, Kota. Bandar Lampung</span>
                        </div>
                    </div>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Telp</h6>
                            <span>+62857-0916-0075</span>
                        </div>
                    </div>
                    <div class="d-flex border-bottom-0 pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                            <i class="fa fa-envelope text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6>E-Mail</h6>
                            <span>adambani707@gmail.com</span>
                        </div>
                    </div>

                    <iframe class="w-100 rounded"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d649.2023675635239!2d105.26101590286953!3d-5.443460023739064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40db6100c851a1%3A0x2dadfbf4b21364cc!2sADAM%20COM.!5e0!3m2!1sid!2sid!4v1724567620647!5m2!1sid!2sid"
                    frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">ADAM COM.</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Gunung Krakatau, Gang Permai II, No. 7, Kec. Teluk Betung Selatan, Kota. Bandar Lampung</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62857-0916-0075</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>adambani707@gmail.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-light rounded-circle me-2" href="https://wa.me/6285709160075" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href="https://web.facebook.com/adam.reckhabanni" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href="https://www.instagram.com/baniadam_tech" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href="https://github.com/Bani-Adam" target="_blank"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Mitra</h4>
                    <a class="btn btn-link" href="https://www.adamdev.my.id"><img src="img/adamdev.png" width="30px" height="30px"> ADAM DEV.</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Jam Kerja</h4>
                    <p class="mb-1">Senin - Jum'at</p>
                    <h6 class="text-light">09:00 - 20.00</h6>
                    <p class="mb-1">Sabtu</p>
                    <h6 class="text-light">09:00 - 17.00</h6>
                    <p class="mb-1">Minggu</p>
                    <h6 class="text-light">Libur</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Buletin</h4>
                    <p>Dapatkan info menarik dari ADAM COM.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="E-Mail Anda">
                        <button type="button" class="btn btn-light py-2 position-absolute top-0 end-0 mt-2 me-2">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; Copyright 2024 <a class="fw-medium text-light" href="#"><img src="favicon/favicon-32x32.png" width="18px" height="18px"> ADAM COM.</a> | All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    Site Created by <a class="fw-medium text-light" href="https://www.adamdev.my.id">ADAM DEV.</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>