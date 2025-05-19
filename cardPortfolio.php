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
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/styleCardPortfolio.css">


<div class="container mt-5">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card" style="height: 100%;">
                <img src="img/html.png" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Modul I HTML</h5>
                    <p class="card-text">Latihan & Tugas Praktikum</p>
                    <a href="portfolioHTML.php" class="btn btn-primary mt-auto">Go somewhere</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card" style="height: 100%;">
                <img src="img/css.png" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Modul II CSS</h5>
                    <p class="card-text">Latihan & Tugas Praktikum</p>
                    <a href="portfolioCSS.php" class="btn btn-primary mt-auto">Go somewhere</a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card" style="height: 100%;">
                <img src="img/PHP.png" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Modul III Struktur Dasar PHP</h5>
                    <p class="card-text">Latihan & Tugas Praktikum</p>
                    <a href="portfolioStrukturturPHP.php" class="btn btn-primary mt-auto">Go somewhere</a>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-4 mb-4">
            <div class="card" style="height: 100%;">
                <img src="img/kondisi22.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Modul IV Pernyataan Kondisi</h5>
                    <p class="card-text">Latihan & Tugas Praktikum</p>
                    <a href="portfolioKondisi.php" class="btn btn-primary mt-auto">Go somewhere</a>
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="col-md-4 mb-4">
            <div class="card" style="height: 100%;">
                <img src="img/loop.png" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Modul V Pernyataan Perulangan</h5>
                    <p class="card-text">Latihan & Tugas Praktikum</p>
                    <a href="portfolioPerulangan.php" class="btn btn-primary mt-auto">Go somewhere</a>
                </div>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="col-md-4 mb-4">
            <div class="card" style="height: 100%;">
                <img src="img/array.png" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Modul VI Array</h5>
                    <p class="card-text">Latihan & Tugas Praktikum</p>
                    <a href="portfolioArray.php" class="btn btn-primary mt-auto">Go somewhere</a>
                </div>
            </div>
        </div>

        <!-- Card 7 -->
        <div class="col-md-4 mb-4">
            <div class="card" style="height: 100%;">
                <img src="img/form1.png" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Modul VII Form</h5>
                    <p class="card-text">Latihan & Tugas Praktikum</p>
                    <a href="portfolioForm.php" class="btn btn-primary mt-auto">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>  

<?php include('footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</html>
