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

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
<div class="container mt-5">
    <!-- Section Title for Latihan Praktikum -->
    <h2 class="text-center mb-4">Latihan Praktikum</h2>

<!-- Button trigger modal - Latihan Praktikum 1 -->
<div class="mb-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#LatihanPraktikum1">
        Latihan Praktikum 1
    </button>
</div>

<!-- Modal 1 -->
<div class="modal fade" id="LatihanPraktikum1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Latihan Praktikum 1</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- HTML Content for Latihan Praktikum 1 -->
                <html>
                    <head>
                        <title>Belajar Membuat Heading dan Paragraph</title>
                    </head>
                    <body>
                        <h1>Heading ke-1</h1> <!-- Heading tingkat 1 -->
                        <h2>Heading ke-2</h2> <!-- Heading tingkat 2 -->
                        <h3>Heading ke-3</h3> <!-- Heading tingkat 3 -->
                        <h4>Heading ke-4</h4> <!-- Heading tingkat 4 -->
                        <h5>Heading ke-5</h5> <!-- Heading tingkat 5 -->
                        <h6>Heading ke-6</h6> <!-- Heading tingkat 6 -->
                        
                        <p> 
                            <strong>ini adalah contoh paragraph</strong> <!-- Teks paragraph yang dicetak tebal -->
                        </p>
                    </body>
                </html>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>

    <!-- Button trigger modal - Praktikum 2 -->
    <div class="mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Praktikum2">
        Latihan Praktikum 2
        </button>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="Praktikum2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <!-- HTML Content for Daftar Barang -->
                <h3>Membuat Unordered List</h3>
                <strong><i><u>Bahan-bahan Memasak Telur Goreng</u></i></strong>
                <ul>
                    <li>Telur 3 butir</li>
                    <li>Margarin (1 sdm)</li>
                    <li>Batang Daun bawang</li>
                    <li>Bawang merah (2 butir)</li>
                    <li>Cabai merah keriting (2 buah)</li>
                    <li>Lada 1/4 sdt</li>
                    <li>Garam 1/4 sdt</li>
                </ul>

                <h3>Membuat Ordered List</h3>
                <strong><i><u>Cara Memasak Telur Goreng</u></i></strong>
                <ol>
                    <li>Campur semua bahan di atas</li>
                    <li>Kocok semua bahan hingga merata</li>
                    <li>Panaskan margarin</li>
                    <li>Goreng dan dadar hingga kuning keemasan (matang)</li>
                    <li>Selesai dan masakan dihidangkan</li>
                </ol>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal - Praktikum 3 -->
    <div class="mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Praktikum3">
        Latihan Praktikum 3
        </button>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade" id="Praktikum3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <!-- HTML Content for Daftar Barang -->
                <h3>Daftar Barang</h3>
                <table border="1">
                    <caption>Tabel Harga Produk</caption>
                    <tr>
                        <th>Kode Produk</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                    </tr>
                    <tr>
                        <td>P001</td>
                        <td>Kipas Angin</td>
                        <td>400.000</td>
                        <td><img src="img/kipas.jpeg" width="145" height="150" alt="Kipas Angin"></td>
                    </tr>
                    <tr>
                        <td>P002</td>
                        <td>Lemari Es</td>
                        <td>1700.000</td>
                        <td><img src="img/lemariEs.jpeg" width="145" height="150" alt="Lemari Es"></td>
                    </tr>
                    <tr>
                        <td>P003</td>
                        <td>Mesin Cuci</td>
                        <td>2000.000</td>
                        <td><img src="img/mesinCuci.jpeg" width="145" height="150" alt="Mesin Cuci"></td>
                    </tr>
                </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal - Praktikum 4 -->
    <div class="mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Praktikum4">
        
        </button>
    </div>


    <!-- Button trigger modal - Praktikum 5 -->
    <div class="mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Praktikum5">
       
        </button>
    </div>

 

    <!-- Button trigger modal - Praktikum 6 -->
    <div class="mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Praktikum6">
      
        </button>
    </div>

 

    <!-- Button trigger modal - Praktikum 7 -->
    <div class="mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Praktikum7">
       
        </button>
    </div>

 
    <!-- Section Title for Tugas Praktikum -->
    <h2 class="text-center mb-4">Tugas Praktikum</h2>

    <!-- Button trigger modal - Tugas Praktikum 1 -->
    <div class="mb-3">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#TugasPraktikum1">
            Tugas Praktikum 1
        </button>
    </div>

<!-- Modal Tugas Praktikum 1 -->
<div class="modal fade" id="TugasPraktikum1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tugas Praktikum 1</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- HTML Content for Foodcourt Website (Without HTML, Head, Body tags) -->
                <!-- Header Section -->
                <header class="text-center py-5 bg-light">
                    <h1>Foodcourt XYZ</h1>
                    <img src="foodcourt_image.jpg" alt="Foodcourt Image" class="img-fluid" width="300">
                </header>

                <!-- Content Section -->
                <div class="container my-5">
                    <h3>Daftar Menu Makanan</h3>
                    <table class="table table-bordered">
                        <caption>Tabel Harga Produk</caption>
                        <thead>
                            <tr>
                                <th>Kode Produk</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>P001</td>
                                <td>Mie Goreng</td>
                                <td>25.000</td>
                                <td><img src="mie_goreng.jpg" alt="Mie Goreng" width="100"></td>
                            </tr>
                            <tr>
                                <td>P002</td>
                                <td>Nasi Goreng</td>
                                <td>30.000</td>
                                <td><img src="nasi_goreng.jpg" alt="Nasi Goreng" width="100"></td>
                            </tr>
                            <tr>
                                <td>P003</td>
                                <td>Ayam Bakar</td>
                                <td>40.000</td>
                                <td><img src="ayam_bakar.jpg" alt="Ayam Bakar" width="100"></td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Link to Access Foodcourt Page -->
                    <div class="text-center">
                        <a href="#foodcourtPage" class="btn btn-primary">Kunjungi Foodcourt</a>
                    </div>
                </div>

                <!-- Footer Section -->
                <footer class="bg-dark text-white text-center py-4">
                    <p>&copy; 2025 Foodcourt XYZ. All Rights Reserved.</p>
                </footer>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>



    <!-- Button trigger modal - Tugas Praktikum 2 -->
    <div class="mb-3">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#TugasPraktikum2">
          
        </button>
    </div>


    <!-- Button trigger modal - Tugas Praktikum 3 -->
    <div class="mb-3">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#TugasPraktikum3">
            
        </button>
    </div>



    <!-- Section Title for PDF Display -->
<h2 class="text-center mb-4">PDF Tugas</h2>

<!-- Button trigger modal - Display PDF for Tugas -->
<div class="mb-3">
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#pdfTugas">
        Tugas 1 - Membuat Tampilan Website
    </button>
</div>

<!-- Modal for Displaying PDF - Tugas Praktikum 4 -->
<div class="modal fade" id="pdfTugas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tugas Praktikum 4</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Displaying PDF in iframe -->
                <iframe src="img/Tugas1_DickyIrawan_054.pdf" width="100%" height="500px" frameborder="0"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>

</div>


<?php include('footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</html>
