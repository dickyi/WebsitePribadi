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
include('header.php');
?>

<link rel="stylesheet" href="css/styleContacs.css">


<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

<!-- Bagian Kontak Saya -->
<section id="contact" class="my-5">
    <div class="text-center">
        <h2>Kontak Saya</h2>
        <p>Jika Anda ingin menghubungi saya untuk diskusi, proyek, atau hanya sekedar bertanya, silakan kirim pesan melalui formulir di bawah ini!</p>
    </div>
    <form action="#" method="POST" class="mx-auto" style="max-width: 600px;">
        <div class="form-group">
            <label for="name">Nama Anda</label>
            <input type="text" id="name" class="form-control" placeholder="Masukkan nama Anda" required>
        </div>
        <div class="form-group">
            <label for="email">Email Anda</label>
            <input type="email" id="email" class="form-control" placeholder="Masukkan email Anda" required>
        </div>
        <div class="form-group">
            <label for="message">Pesan Anda</label>
            <textarea id="message" class="form-control" rows="4" placeholder="Tulis pesan Anda di sini" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Kirim Pesan</button>
    </form>
</section>

<?php
include('footer.php');
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>
