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

// Membaca konten artikel dari file JSON
$file = 'data/content.json'; // Ganti dengan lokasi file JSON Anda

// Pastikan file ada
if (!file_exists($file)) {
    echo "<p style='color: red;'>File JSON tidak ditemukan!</p>";
    exit();
}

// Membaca dan mendecode JSON
$json_data = file_get_contents($file);
if (!$json_data) {
    echo "<p style='color: red;'>Gagal membaca file JSON!</p>";
    exit();
}

$json_data = json_decode($json_data, true);

// Cek jika JSON berhasil didecode
if ($json_data === null) {
    echo "<p style='color: red;'>Data JSON tidak valid!</p>";
    exit();
}

// Cari artikel yang sesuai dengan judul yang diinginkan
$article = null;
foreach ($json_data as $content) {
    if ($content['title'] === "Mengapa Web Design Itu Penting?") {
        $article = $content;
        break;
    }
}

if (!$article) {
    echo "<p>Artikel tidak ditemukan.</p>";
    exit();
}
?>


<!-- Article Page Content -->
<div class="container mt-5">
    <div class="row">
        <!-- Article Header -->
        <div class="col-md-12">
            <h2 class="display-4"><?php echo htmlspecialchars($article['title']); ?></h2>
            <p class="text-muted">Dipublikasikan pada: <?php echo date("l, F j, Y", strtotime($article['created_at'])); ?></p>
            <hr>
        </div>
        
        <!-- Article Content -->
        <div class="col-md-8">
            <div class="card mb-4">
                <img src="img/webDesign.avif" class="card-img-top" alt="Web Design Image">
                <div class="card-body">
                    <h5 class="card-title">Desain Web yang User-Friendly</h5>
                    <p class="card-text"><?php echo nl2br(htmlspecialchars($article['content'])); ?></p>

                    <h6 class="card-subtitle mb-2 text-muted">Apa yang Membuat Desain Web Menjadi Penting?</h6>
                    <p>
                        1. **User Experience (UX):** Desain yang baik meningkatkan pengalaman pengguna, memudahkan mereka menemukan informasi yang dicari.
                    </p>
                    <p>
                        2. **Kecepatan Halaman:** Desain yang sederhana dan ringan membantu situs web dimuat dengan cepat, yang sangat penting untuk SEO.
                    </p>
                    <p>
                        3. **Responsif pada Semua Perangkat:** Desain yang responsif memastikan bahwa situs web Anda tampil dengan baik di berbagai perangkat, seperti desktop, tablet, dan ponsel.
                    </p>

                    <h6 class="card-subtitle mb-2 text-muted">Kesimpulan</h6>
                    <p>
                        Desain web yang baik tidak hanya mempengaruhi estetika situs tetapi juga pengalaman pengguna secara keseluruhan. Pastikan Anda selalu mempertimbangkan kenyamanan pengunjung dalam setiap elemen desain situs Anda.
                    </p>
                </div>
            </div>
        </div>

        <!-- Sidebar for additional links or posts -->
        <div class="col-md-4">
            <h4>Artikel Terkait</h4>
            <ul>
                <li><a href="BlogArtikel2.php">Artikel 2: Program Lebih Cerdas: Bagaimana AI Membantu Mengatasi Tantangan Pemrograman</a></li>
                <li><a href="BlogArtikel3.php">Artikel 3: Analisis Perancangan Sistem Reservasi Online Rumah Sakit RSIAN Nganjuk</a></li>
                <li><a href="BlogArtikel4.php">Artikel 4: Pentingnya Program Studi Sistem Informasi dalam Menghadapi Era Digital</a></li>
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
