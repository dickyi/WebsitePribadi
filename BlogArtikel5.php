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
            <h2 class="display-4">Artikel 5: Belajar Manajemen Bisnis di Program Studi Sistem Informasi</h2>
            <p class="text-muted">Dipublikasikan pada: <?php echo date("l, F j, Y"); ?></p>
            <hr>
        </div>
        
        <!-- Article Content -->
        <div class="col-md-8">
            <div class="card mb-4">
                <img src="img/blog5.jpg" class="card-img-top" alt="Manajemen Bisnis dalam Sistem Informasi">
                <div class="card-body">
                    <h5 class="card-title">Pentingnya Belajar Manajemen Bisnis dalam Program Studi Sistem Informasi</h5>
                    <p class="card-text">
                        Program Studi Sistem Informasi tidak hanya fokus pada aspek teknis, tetapi juga mengajarkan keterampilan manajemen bisnis yang penting untuk mengelola teknologi dan sistem informasi dalam organisasi. Manajemen bisnis dalam konteks Sistem Informasi melibatkan pemahaman tentang bagaimana teknologi dapat digunakan untuk mendukung keputusan bisnis, meningkatkan efisiensi operasional, dan mengelola sumber daya teknologi.
                    </p>

                    <h6 class="card-subtitle mb-2 text-muted">Mengapa Manajemen Bisnis Penting dalam Sistem Informasi?</h6>
                    <p>
                        1. **Pengelolaan Teknologi untuk Bisnis:** Lulusan Sistem Informasi belajar bagaimana merancang dan mengimplementasikan sistem informasi yang mendukung tujuan bisnis perusahaan.
                    </p>
                    <p>
                        2. **Keterampilan Pengambilan Keputusan:** Manajemen bisnis memberikan kemampuan untuk membuat keputusan yang lebih baik dalam menggunakan teknologi untuk mendukung strategi bisnis.
                    </p>
                    <p>
                        3. **Integrasi Teknologi dan Bisnis:** Memahami bagaimana teknologi dapat digunakan untuk memecahkan masalah bisnis adalah keterampilan penting yang diajarkan di program ini.
                    </p>

                    <h6 class="card-subtitle mb-2 text-muted">Kesimpulan</h6>
                    <p>
                        Belajar manajemen bisnis di Program Studi Sistem Informasi memberikan keuntungan kompetitif di dunia yang semakin terhubung dengan teknologi. Dengan menguasai baik aspek teknis maupun manajerial, lulusan program studi ini dapat memainkan peran penting dalam mengelola dan mengoptimalkan sistem informasi untuk kesuksesan bisnis.
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
                <li><a href="BlogArtikel4.php">Artikel 4: Pentingnya Program Studi Sistem Informasi dalam Menghadapi Era Digital</a></li>
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
