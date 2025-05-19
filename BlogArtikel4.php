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

<!-- Article Page Content -->
<div class="container mt-5">
    <div class="row">
        <!-- Article Header -->
        <div class="col-md-12">
            <h2 class="display-4">Artikel 4: Pentingnya Program Studi Sistem Informasi dalam Menghadapi Era Digital</h2>
            <p class="text-muted">Dipublikasikan pada: <?php echo date("l, F j, Y"); ?></p>
            <hr>
        </div>
        
        <!-- Article Content -->
        <div class="col-md-8">
            <div class="card mb-4">
                <img src="img/blog4.png" class="card-img-top" alt="Program Studi Sistem Informasi">
                <div class="card-body">
                    <h5 class="card-title">Pentingnya Program Studi Sistem Informasi dalam Menghadapi Era Digital</h5>
                    <p class="card-text">
                        Program Studi Sistem Informasi memainkan peran penting dalam dunia yang semakin bergantung pada teknologi. Lulusan dari program ini memiliki kemampuan untuk menganalisis, merancang, dan mengembangkan sistem informasi yang mendukung operasi bisnis dan organisasi. Selain itu, mereka juga memiliki keterampilan dalam pengelolaan data, pengembangan perangkat lunak, serta penerapan teknologi informasi untuk memecahkan masalah di berbagai bidang.
                    </p>

                    <h6 class="card-subtitle mb-2 text-muted">Mengapa Program Studi Ini Penting?</h6>
                    <p>
                        1. **Kebutuhan di Dunia Kerja:** Di tengah transformasi digital, hampir setiap sektor membutuhkan sistem informasi untuk mengelola data dan menjalankan operasional yang lebih efisien.
                    </p>
                    <p>
                        2. **Keterampilan Teknologi yang Diperlukan:** Lulusan program studi ini dibekali dengan berbagai keterampilan seperti analisis sistem, pemrograman, dan manajemen proyek yang sangat dicari oleh perusahaan teknologi.
                    </p>
                    <p>
                        3. **Kemampuan Beradaptasi dengan Teknologi Baru:** Program studi Sistem Informasi memberikan bekal kepada mahasiswa untuk selalu beradaptasi dengan perkembangan teknologi yang terus berubah dan semakin kompleks.
                    </p>

                    <h6 class="card-subtitle mb-2 text-muted">Kesimpulan</h6>
                    <p>
                        Program studi Sistem Informasi tidak hanya relevan tetapi sangat penting di era digital ini. Lulusan dari program ini dapat berperan dalam pengembangan solusi teknologi yang inovatif, yang dapat meningkatkan efisiensi dan daya saing organisasi di berbagai sektor. Jika Anda tertarik untuk berkarir dalam teknologi dan sistem informasi, memilih program studi ini adalah langkah yang tepat untuk membangun masa depan Anda.
                    </p>

                </div>
            </div>
        </div>

        <!-- Sidebar for additional links or posts -->
        <div class="col-md-4">
            <h4>Artikel Terkait</h4>
            <ul>
                <li><a href="BlogArtikel1.php">Artikel 1: Mengapa Web Design Itu Penting?</a></li>
                <li><a href="BlogArtikel2.php">Artikel 2: Program Lebih Cerdas: Bagaimana AI Membantu Mengatasi Tantangan Pemrograman</a></li>
                <li><a href="BlogArtikel3.php">Artikel 3: Analisis Perancangan Sistem Reservasi Online Rumah Sakit RSIAN Nganjuk</a></li>
                <li><a href="BlogArtikel5.php">Artikel 5: Belajar Manajemen Bisnis di Program Studi Sistem Informasi</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include('footer.php'); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
