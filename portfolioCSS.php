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

    <!-- Modal Latihan Praktikum 1 -->
<div class="modal fade" id="LatihanPraktikum1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Latihan Praktikum 1</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- HTML Content Inside Modal -->
                <style>
                    html, body {
                        margin: 0;
                        padding: 0;
                    }

                    #box {
                        width: 100%;
                        margin: auto;
                    }

                    #header {
                        background-color: #dfd5d5;
                        padding: 20px;
                    }

                    #menubar {
                        background-color: #e4e4e4;
                        margin: auto;
                    }

                    .teksmenu {
                        text-decoration: none;
                    }

                    #konten {
                        padding: 20px;
                    }

                    #footeer {
                        background-color: #999494;
                        padding: 20px;
                    }
                </style>
                <div id="box">
                    <div id="header" align="center">
                        <h1>Institut Teknologi Mojosari</h1>
                        Dsn Ngepeh, Ds Mojosari, Kec. Loceret, Nganjuk
                    </div>

                    <div id="menubar" align="center">
                        <a href="" class="teksmenu">Home</a> | <a href="">Beranda</a> | <a href="">Produk</a>
                    </div>

                    <div id="konten">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In finibus urna massa, vel varius lectus ullamcorper nec.
                            Vivamus ornare massa non odio faucibus vehicula. Sed luctus nisi ut laoreet interdum. Sed eu sem ut felis tristique commodo.
                            Morbi nec egestas orci. Donec ornare rhoncus facilisis. Suspendisse lacinia justo sit amet enim lobortis, sed blandit sapien ultricies.
                            Aenean arcu enim, maximus feugiat semper ut, blandit eget ex. Integer eget sollicitudin risus, id varius est. Nam ac interdum nisi.
                        </p>
                    </div>

                    <div id="footeer" align="center">
                        Web Programming I <br> 2025
                    </div>
                </div>
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
  
        </button>
    </div>

 

    <!-- Button trigger modal - Praktikum 3 -->
    <div class="mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Praktikum3">

        </button>
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

 <!-- Modal for Displaying PDF - Tugas Praktikum 4 -->
 <div class="modal fade" id="TugasPraktikum1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tugas Praktikum 4</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Displaying PDF in iframe -->
                <iframe src="img/Tugas2_DickyIrawan_054.pdf" width="100%" height="500px" frameborder="0"></iframe>
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
                <iframe src="img/Tugas2_DickyIrawan_054.pdf" width="100%" height="500px" frameborder="0"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>

</div>
</div>



<?php include('footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</html>
