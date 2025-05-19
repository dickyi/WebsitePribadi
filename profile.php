<?php
// Mulai session untuk memeriksa status login
session_start();

// Cek apakah session login sudah ada
if (!isset($_SESSION['login']) || $_SESSION['login'] !== 1) {
    // Jika pengguna belum login, arahkan ke halaman login
    header("Location: login.php");
    exit();
}

// Sertakan file header setelah memulai sesi
include('header.php');
?>
<!-- Tambahkan link ke Font Awesome -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/styleProfile.css">

<!-- Konten Halaman Profil Saya -->
<section id="profile" class="my-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Foto Profil -->
            <div class="col-md-4 text-center">
                <img src="img/diki2.png" class="img-fluid rounded-circle shadow-lg" alt="Foto Profil" style="width: 250px; transition: transform 0.3s ease;">
            </div>
            
            <!-- Informasi Pribadi -->
            <div class="col-md-8">
                <h2 class="display-4 font-weight-bold">Dicky Irawan</h2>
                <p class="text-muted mb-4"><strong>Mahasiswa Sistem Informasi</strong></p>
                <p class="lead">Saya Dicky Irawan, mahasiswa yang sangat antusias dengan dunia teknologi. Memiliki passion di bidang desain grafis dan pemrograman yang mendorong saya untuk terus belajar dan berkembang. Teknologi adalah alat saya untuk menciptakan solusi yang inovatif dan efektif, serta memberikan pengalaman visual yang menarik bagi penggunanya.</p>
                
                <!-- Informasi Kontak -->
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Tanggal Lahir:</strong> 23.03.2004</p>
                        <p><strong>Usia:</strong> 21</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Email:</strong> irawandicky300@gmail.com</p>
                        <p><strong>Telepon:</strong> 0821-7626-5354</p>
                    </div>
                </div>

                <!-- Informasi Lainnya -->
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Kewarganegaraan:</strong> Indonesia</p>
                        <p><strong>Pendidikan:</strong> Institut Teknologi Mojosari</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Alamat:</strong> Nganjuk, Jawa Timur</p>
                    </div>
                </div>

                <!-- Tombol untuk Mengunduh Resume -->
                <a href="img/cvDicky.pdf" class="btn btn-primary btn-lg mt-4" download>Download Resume</a>
            </div>
        </div>
    </div>
</section>

<?php
include('footer.php');
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>



</body>
</html>
