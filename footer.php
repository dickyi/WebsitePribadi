<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>

    <!-- Link ke Font Awesome untuk ikon sosial media -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    
    <style>
        /* Styling untuk ikon sosial media */
        #footer .social-media {
            display: flex; /* Menggunakan Flexbox untuk tata letak horisontal */
            justify-content: center; /* Menyusun ikon secara horizontal dan di tengah */
            padding: 10px 0;
        }

        #footer .btn-floating {
            font-size: 1.5rem; /* Ukuran ikon */
            width: 50px; /* Lebar ikon */
            height: 50px; /* Tinggi ikon */
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%; /* Membuat ikon menjadi bulat */
            margin: 0 15px; /* Memberikan jarak antar ikon */
            transition: transform 0.3s ease, background-color 0.3s ease; /* Efek transisi */
        }

        /* Hover effect untuk sosial media */
        #footer .btn-floating:hover {
            transform: scale(1.1); /* Efek memperbesar ikon saat di-hover */
        }

        /* Styling untuk warna latar belakang tombol sosial media */
        #footer .btn-floating i {
            color: white; /* Warna ikon putih */
        }

        /* Styling untuk background ikon sosial media */
        #footer .btn-floating:nth-child(1) {
            background-color: #333333; /* GitHub */
        }
        #footer .btn-floating:nth-child(2) {
            background-color: #FF0000; /* YouTube */
        }
        #footer .btn-floating:nth-child(3) {
            background-color: #0088cc; /* Telegram */
        }

        /* Styling Footer Copyright */
        #footer .text-center {
            background-color: rgba(0, 0, 0, 0.2);
            padding: 10px;
        }
    </style>
</head>
<body>

    <!-- Konten halaman lainnya -->
<footer class="bg-light text-center text-white" id="footer">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
             <?php 
            // Menyembunyikan ikon sosial media di halaman login, forgot-password, password, register, dan reset-password
            if (!in_array(basename($_SERVER['PHP_SELF']), ['login.php', 'forgot-password.php', 'password.php', 'register.php', 'reset-password.php'])): ?>
                <!-- Social media icons -->
                <div class="social-media">
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;" href="https://github.com/dickyi" role="button" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #FF0000;" href="https://www.youtube.com/channel/UCo8ONkzTYQQT1GWurw37l7g" role="button" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #0088cc;" href="https://t.me/+6282176265354" role="button" target="_blank">
                        <i class="fab fa-telegram-plane"></i>
                    </a>

                </div>
            <?php endif; ?>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2025 Dicky Irawan
    </div>
    <!-- Copyright -->
</footer>
</body>
</html>
