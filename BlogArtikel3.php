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
            <h2 class="display-4">Artikel 3: Analisis Perancangan Sistem Reservasi Online Rumah Sakit RSIAN Nganjuk</h2>
            <p class="text-muted">Dipublikasikan pada: <?php echo date("l, F j, Y"); ?></p>
            <hr>
        </div>
        
        <!-- Article Content -->
        <div class="col-md-8">
            <div class="card mb-4">
                <img src="img/blog333.png" class="card-img-top" alt="Artikel 3">
                <div class="card-body">
                    <h5 class="card-title">Abstrak</h5>
                    <p class="card-text">
                        Pengembangan teknologi informasi telah mendorong transformasi di sektor kesehatan, termasuk Rumah Sakit Islam Aisyiyah Nganjuk (RSIAN Nganjuk), yang menghadapi tantangan terkait antrian panjang dan waktu tunggu pasien akibat sistem pendaftaran konvensional yang kurang optimal dan berdampak negatif pada efisiensi operasional serta kepuasan pasien. Penelitian ini bertujuan menganalisis efektivitas sistem pendaftaran saat ini, mengidentifikasi faktor penyebab antrian panjang, serta merancang dan mengevaluasi sistem reservasi online untuk meningkatkan kualitas layanan rumah sakit. Sistem reservasi online yang diusulkan memungkinkan pasien mendaftar dari mana saja tanpa harus hadir langsung di rumah sakit, sehingga mengurangi kepadatan dan mempercepat proses layanan, serta menyediakan informasi jadwal dokter secara real-time yang terintegrasi dengan sistem informasi rumah sakit yang ada, memberikan akses layanan kesehatan yang lebih cepat dan akurat.
                    </p>
                    
                    <h5 class="card-title">Kata Kunci</h5>
                    <p class="card-text">
                        Sistem Reservasi, Rumah Sakit, Teknologi Informasi, PIECES
                    </p>

                    <h5 class="card-title">Pendahuluan</h5>
                    <p class="card-text">
                        Keberadaan teknologi informasi telah mendorong transformasi layanan kesehatan untuk meningkatkan efisiensi dan kualitas pelayanan. Rumah Sakit Islam Aisyiyah Nganjuk (RSIAN Nganjuk) menghadapi tantangan berupa antrian panjang dan waktu tunggu yang berdampak negatif terhadap efisiensi operasional dan kenyamanan pasien. Sistem pendaftaran konvensional terbukti kurang optimal, mengakibatkan penurunan kualitas layanan. 
                        Untuk mengatasi hal ini, pengembangan sistem reservasi online diharapkan menjadi solusi efektif, memungkinkan pasien mendaftar dari mana saja tanpa perlu hadir langsung. Sistem ini tidak hanya mengurangi kepadatan rumah sakit, tetapi juga mempercepat proses layanan dan meningkatkan efisiensi operasional.
                    </p>

                    <h5 class="card-title">Bahan dan Metode</h5>
                    <p class="card-text">
                        Penelitian ini menggunakan metode PIECES untuk mengevaluasi sistem pendaftaran rumah sakit berdasarkan enam aspek utama: Performance, Information, Economics, Control, Efficiency, dan Services. Hasil analisis menunjukkan bahwa sistem reservasi online dapat meningkatkan kinerja dengan mempercepat proses pendaftaran, menyediakan informasi yang lebih akurat, menurunkan biaya operasional, serta meningkatkan kontrol terhadap data pasien melalui fitur autentikasi. 
                    </p>

                    <h5 class="card-title">Perancangan Sistem</h5>
                    <p class="card-text">
                        Perancangan sistem yang diusulkan mencakup komponen sistem yang akan diintegrasikan untuk membentuk sistem reservasi online yang efisien. Ini termasuk pengembangan Flow Map, Data Flow Diagram (DFD), dan Entity Relationship Diagram (ERD) yang digunakan untuk merancang aliran data dan interaksi sistem. 
                    </p>

                    <h5 class="card-title">Kesimpulan</h5>
                    <p class="card-text">
                        Implementasi sistem reservasi online di Rumah Sakit Islam Aisyiyah Nganjuk diharapkan dapat meningkatkan efisiensi operasional, mengurangi waktu tunggu, dan meningkatkan kualitas pelayanan rumah sakit. Sistem ini memberikan akses layanan yang lebih cepat dan akurat bagi pasien serta meningkatkan kepuasan mereka. Diharapkan, sistem ini juga dapat menjadi model bagi rumah sakit lain dalam mengelola layanan kesehatan yang lebih baik dan modern.
                    </p>

                    <h5 class="card-title">Daftar Pustaka</h5>
                    <p class="card-text">
                        1. Akbar, M. I., & Trie Novka, H. (2023). Rancang Bangun Sistem Informasi Antrian dan Pendaftaran Rawat Jalan Rumah Sakit Medika Lestari. Jurnal Universal Technic, 2(1), 112–136.<br>
                        2. Alimuddin, S., & Ahsan, M. (2023). Analisis Sistem Antrian dan Optimalisasi Layanan pada UPTD Puskesmas Lakessi Parepare. Journal of Mathematics Learning Innovation (Jmli), 1(2), 163–175.<br>
                        3. Daraba, D., Salam, R., Wijaya, I. D., Baharuddin, A., Sunarsi, D., & Bustamin, B. (2023). Membangun Pelayanan Publik Yang Inovatif Dan Efisien Di Era Digital Di Indonesia. Jurnal Pallangga Praja (JPP), 5(1), 31–40.<br>
                        (Dan seterusnya...)
                    </p>

                    <!-- Button to trigger the modal -->
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#pdfJurnalModal">
                        PDF Jurnal
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar for additional links or posts -->
        <div class="col-md-4">
            <h4>Artikel Terkait</h4>
            <ul>
                <li><a href="BlogArtikel1.php">Artikel 1: Mengapa Web Design Itu Penting?</a></li>
                <li><a href="BlogArtikel2.php">Artikel 2: Program Lebih Cerdas: Bagaimana AI Membantu Mengatasi Tantangan Pemrograman</a></li>
                <li><a href="BlogArtikel4.php">Artikel 4: Pentingnya Program Studi Sistem Informasi dalam Menghadapi Era Digital</a></li>
                <li><a href="BlogArtikel5.php">Artikel 5: Belajar Manajemen Bisnis di Program Studi Sistem Informasi</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- PDF Modal -->
<div class="modal fade" id="pdfJurnalModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="pdfJurnalModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pdfJurnalModalLabel">Analisis Perancangan Sistem Reservasi Online Rumah Sakit RSIAN Nganjuk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Displaying PDF in iframe -->
                <iframe src="img/Analisis_Perancangan_Sistem_Reservasi_Online_Rumah_Sakit_RSIAN_Nganjuk.pdf" width="100%" height="500px" frameborder="0"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include('footer.php'); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
