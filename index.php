<?php
// Mulai session untuk memeriksa status login
session_start();

// Cek apakah session login sudah ada
if (!isset($_SESSION['login']) || $_SESSION['login'] !== 1) {
    // Jika pengguna belum login, arahkan ke halaman login
    header("Location: login.php");
    exit();
}

// Termasuk header.php setelah session_start()
// include('header.php');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dicky Irawan – Website Pribadi</title>
    
    <!-- Link CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/styleIndexxx.css">
</head>
<body>

<?php include('header.php'); ?>
<!-- Konten Halaman Utama -->
<div class="container mt-5">



<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<link rel="stylesheet" href="css/styleIndexxx.css"> -->

    <!-- Hero Section -->
    <div class="jumbotron text-center bg-primary text-white py-5">
        <h1 class="display-4">Selamat Datang di Situs Pribadi Saya!</h1>
        <p class="lead">Saya Dicky, seorang mahasiswa yang berfokus pada pengembangan diri dan berbagai proyek menarik.</p>
        <a href="#about" class="btn btn-light btn-lg">Pelajari Lebih Lanjut</a>
    </div>

    <!-- Bagian Tentang Saya -->
    <section id="about" class="my-5">
        <div class="row">
            <div class="col-lg-6">
                <h2>Tentang Saya</h2>
                <p>Halo👋 saya Dicky, mahasiswa Sistem Informasi di Institut Teknologi Mojosari. Saya sangat antusias dengan dunia teknologi dan terus berusaha untuk mengasah keterampilan dalam pengembangan bisnis serta manajemen. Selain itu, saya aktif terlibat dalam berbagai komunitas yang memberikan saya kesempatan untuk berbagi pengetahuan dan belajar dari orang lain.</p>
            </div>
            <div class="col-lg-6">
                <img src="img/diki3.png" class="img-fluid rounded-circle" alt="Foto Saya">
            </div>
        </div>
    </section>


   <!-- Bagian Skills -->
    <section id="skills" class="my-5">
        <div class="text-center mb-4">
            <h2>Skills</h2>
            <p>Beberapa keterampilan yang saya kuasai</p>
        </div>
        <div class="row justify-content-center">
            <!-- Java -->
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <img src="img/java.png" alt="Java" class="mb-3" style="width:48px; height:48px; margin:auto;">
                        <h5 class="card-title">Java</h5>
                        <p class="fw-bold">80%</p>
                    </div>
                </div>
            </div>
            <!-- Python -->
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <img src="img/python.webp" alt="Python" class="mb-3" style="width:48px; height:48px; margin:auto;">
                        <h5 class="card-title">Python</h5>
                        <p class="fw-bold">60%</p>
                    </div>
                </div>
            </div>
            <!-- C++ -->
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <img src="img/cpp.png" alt="C++" class="mb-3" style="width:48px; height:48px; margin:auto;">
                        <h5 class="card-title">C++</h5>
                        <p class="fw-bold">69%</p>
                    </div>
                </div>
            </div>
            <!-- Canva -->
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <img src="img/canva.jpeg" alt="Canva" class="mb-3" style="width:48px; height:48px; margin:auto;">
                        <h5 class="card-title">Canva</h5>
                        <p class="fw-bold">85%</p>
                    </div>
                </div>
            </div>
            <!-- Figma -->
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <img src="img/figmaa.png" alt="Figma" class="mb-3" style="width:48px; height:48px; margin:auto;">
                        <h5 class="card-title">Figma</h5>
                        <p class="fw-bold">60%</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



<!-- Bagian Portfolio/Proyek Saya -->
<section id="portfolio" class="my-5">
    <div class="text-center">
        <h2>Proyek Saya</h2>
        <p>Berikut adalah beberapa proyek yang saya kerjakan dalam perjalanan saya.</p>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <img src="img/html.png" class="card-img-top" alt="Proyek 1">
                <div class="card-body">
                    <h5 class="card-title">Modul I HTML</h5>
                    <p class="card-text">Membangun situs web dinamis menggunakan HTML5, untuk mempelajari struktur dasar halaman web dan tag HTML yang esensial.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <img src="img/css.png" class="card-img-top" alt="Proyek 2">
                <div class="card-body">
                    <h5 class="card-title">Modul II CSS</h5>
                    <p class="card-text">Menggunakan CSS untuk mendesain dan memperindah tampilan web, mempelajari styling dasar dan layout responsif dengan Flexbox dan Grid.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <img src="img/php.png" class="card-img-top" alt="Proyek 3">
                <div class="card-body">
                    <h5 class="card-title">Modul III Struktur Dasar PHP</h5>
                    <p class="card-text">Mempelajari dasar PHP untuk membangun aplikasi web dinamis, termasuk variabel, struktur kontrol, dan fungsi dasar.</p>

                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
        <!-- Tombol untuk menuju ke halaman portfolio lengkap -->
        <a href="cardPortfolio.php" class="btn btn-primary btn-lg">Lihat Semua Portfolio</a>
    </div>
</section>



<!-- Bagian Layanan Saya -->
<section id="layanan" class="my-5">
    <div class="text-center">
        <h2>Layanan Saya</h2>
        <p>Berikut adalah beberapa layanan yang saya tawarkan untuk membantu kebutuhan digital Anda.</p>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <img src="img/web1.png" class="card-img-top" alt="Proyek 1">
                <div class="card-body">
                    <h5 class="card-title">Pengembangan Aplikasi Web</h5>
                    <p class="card-text">Saya mengembangkan aplikasi web yang responsif dan fungsional dengan fokus pada performa dan user experience yang optimal.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <img src="img/desktp.png" class="card-img-top" alt="Proyek 2">
                <div class="card-body">
                    <h5 class="card-title">Pengembangan Aplikasi Desktop untuk Windows</h5>
                    <p class="card-text">Saya merancang aplikasi desktop yang efisien dan intuitif untuk Windows, dengan tampilan yang menarik dan mudah digunakan.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <img src="img/ui.png" class="card-img-top" alt="Proyek 3">
                <div class="card-body">
                    <h5 class="card-title">UI Design</h5>
                    <p class="card-text">Saya mengkhususkan diri dalam desain UI yang intuitif dan visual menarik, dengan fokus pada kegunaan dan estetika yang modern.</p>
                </div>
            </div>
        </div>
    </div>
</section>


 


<!-- Bagian Kontak Saya -->
<section id="contact" class="my-5 text-center">
    <div class="container">
        <!-- Pesan Sambutan dan Foto -->
        <div class="row justify-content-center align-items-center">
            <!-- Teks dan Tombol -->
            <div class="col-md-6">
                <div class="circle-bg p-5">
                    <h3 class="mb-4">Punya ide yang hebat?</h3>
                    <h2 class="mb-4">MARI BICARAKAN TENTANG PROYEK ANDA</h2>
                    <!-- Tombol WhatsApp -->
                    <a href="https://wa.me/6282176265354" target="_blank" class="btn btn-warning btn-lg">
                        <i class="fab fa-whatsapp"></i> HUBUNGI SAYA
                    </a>
                </div>
            </div>

            <!-- Foto Saya -->
            <div class="col-md-6">
                <div class="circle-photo p-5">
                    <img src="img/diki6.jpg" alt="Foto Saya" class="img-fluid rounded-circle">
                </div>
            </div>
        </div>
    </div>
</section>


    </div>

<?php
include('footer.php');
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>
