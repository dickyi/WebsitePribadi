<?php
// Mulai session untuk memeriksa status login
session_start();

// Cek apakah session login sudah ada
if (!isset($_SESSION['login']) || $_SESSION['login'] !== 1) {
    // Jika pengguna belum login, arahkan ke halaman login
    header("Location: login.php");
    exit();
}

include('header.php'); // Sertakan file header setelah session dimulai
?>

<style>
    .card-img-top {
        width: 100%;
        height: 200px; /* Sesuaikan dengan tinggi yang diinginkan */
        object-fit: cover; /* Memastikan gambar memenuhi ruang tanpa distorsi */
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Articles</title>
    <!-- <link rel="stylesheet" href="css/styleBlog.css"> Link ke file CSS -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<div class="container mt-5">
    <h2 class="mb-4">Blog Articles</h2>
    <div class="row">
        <!-- Artikel 1 -->
        <div class="col-md-4 mb-4">
            <div class="card" style="height: 100%;">
                <img src="img/webDesign.avif" class="card-img-top" alt="Artikel 1">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Artikel 1: Mengapa Web Design Itu Penting?</h5>
                    <p class="card-text">Artikel ini membahas mengapa desain web menjadi faktor penting dalam pengembangan situs web yang user-friendly dan responsif.</p>
                    <a href="BlogArtikel1.php" class="btn btn-primary mt-auto">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Artikel 2 -->
        <div class="col-md-4 mb-4">
            <div class="card" style="height: 100%;">
                <img src="img/ai_partner.avif" class="card-img-top" alt="AI Sebagai Partner Pemrograman">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Artikel 2: Program Lebih Cerdas: Bagaimana AI Membantu Mengatasi Tantangan Pemrograman</h5>
                    <p class="card-text">AI, seperti ChatGPT, membantu pemrogram mengatasi tantangan pemrograman dengan solusi praktis, seperti penulisan kode, debugging, dan merancang algoritma yang efisien. Artikel ini membahas bagaimana AI meningkatkan kualitas pemrograman Anda.</p>
                    <a href="BlogArtikel2.php" class="btn btn-primary mt-auto">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Artikel 3 -->
        <div class="col-md-4 mb-4">
            <div class="card" style="height: 100%;">
                <img src="img/blog33.png" class="card-img-top" alt="Artikel 3">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Artikel 3: Analisis Perancangan Sistem Reservasi Online Rumah Sakit RSIAN Nganjuk</h5>
                    <p class="card-text">Artikel ini membahas perancangan dan analisis sistem reservasi online untuk Rumah Sakit RSIAN Nganjuk. Sistem ini bertujuan untuk mempermudah proses reservasi bagi pasien dan meningkatkan efisiensi operasional rumah sakit.</p>
                    <a href="BlogArtikel3.php" class="btn btn-primary mt-auto">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Artikel 4 -->
        <div class="col-md-4 mb-4">
            <div class="card" style="height: 100%;">
                <img src="img/blog4.png" class="card-img-top" alt="Program Studi Sistem Informasi">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Artikel 4: Pentingnya Program Studi Sistem Informasi dalam Menghadapi Era Digital</h5>
                    <p class="card-text">
                        Program Studi Sistem Informasi penting dalam dunia yang bergantung pada teknologi. Lulusan program ini mampu menganalisis, merancang, dan mengembangkan sistem informasi yang mendukung bisnis dan organisasi.
                    </p>
                    <a href="BlogArtikel4.php" class="btn btn-primary mt-auto">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Artikel 5 -->
        <div class="col-md-4 mb-4">
            <div class="card" style="height: 100%;">
                <img src="img/blog5.jpg" class="card-img-top" alt="Belajar Manajemen Bisnis di Sistem Informasi">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Artikel 5: Belajar Manajemen Bisnis di Program Studi Sistem Informasi</h5>
                    <p class="card-text">Program Studi Sistem Informasi tidak hanya memfokuskan pada teknologi, tetapi juga mengajarkan manajemen bisnis yang dibutuhkan untuk mengelola sistem informasi dalam organisasi. Pelajari lebih lanjut tentang peran manajemen bisnis dalam program studi ini.</p>
                    <a href="BlogArtikel5.php" class="btn btn-primary mt-auto">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include('footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</html>
