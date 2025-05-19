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
            <?php
            // tanda untuk memberikan komentar satu baris
            echo "<h1>Selamat Datang..</h1>";
            echo "Program PHPku yang pertama<br>";
            /*
            tanda untuk memberikan komentar
            komentar ini lebih dari satu baris
            */
            ?>

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
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Latihan Praktikum 2</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                 <?php
                $nim = '23650048';
                $nama = 'Hanson Philip';
                $alamat = 'Jl. Gajah Mada No.4';
                $nilai = 80;

                echo "NIM : ", $nim, "<br>";
                echo "Nama : ", $nama, "<br>";
                echo "Alamat : ", $alamat, "<br>";
                echo "Nilai : $nilai";
                ?>

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
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Latihan Praktikum 3</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <?php
                    $a = "5";
                    $b = "2.5";
                    $komentar = "Selamat Datang";

                    echo "Nilai variabel a adalah = $a <br>";
                    echo "Nilai variabel b adalah = $b <br>";
                    echo "Nilai variabel komentar adalah = $komentar <br>";

                    // variabel bertipe integer
                    $a = 5; 
                    // variabel bertipe real
                    $b = 2.5; 

                    // rumus penjumlahan
                    $tambah = $a + $b;
                    // rumus pengurangan
                    $kurang = $a - $b;
                    // rumus perkalian
                    $kali = $a * $b;
                    // rumus pembagian
                    $bagi = $a / $b;

                    echo "Hasil penjumlahan a dan b adalah = $tambah <br>";
                    echo "Hasil pengurangan a dan b adalah = $kurang <br>";
                    echo "Hasil perkalian a dan b adalah = $kali <br>";
                    echo "Hasil pembagian a dan b adalah = $bagi <br>";

                    $nama = "ITM";
                    $garis = "===============================";

                    echo "<p></p>";
                    echo $garis."<br>";
                    echo $komentar. " Di Lab ". $nama. "<br>Selamat Belajar Pemrograman Web <br>";
                    echo $garis."<br>";
                    ?>

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
                <p><strong>Soal:</strong> Jika ada seorang nasabah bank yang menabung di bank X dengan saldo awal Rp. 2.000.000,-. Bank X memberikan kebijakan bunga 3% per bulan dari saldo awal tabungan. Hitunglah jumlah saldo akhir nasabah tersebut setelah 11 bulan.</p>
                <p><strong>Jawaban:</strong></p>

                <?php
                    $saldoAwal = 2000000; // saldo awal Rp. 2.000.000
                    $bunga = 0.03; // bunga 3% per bulan
                    $bulan = 11; // periode 11 bulan

                    // perhitungan saldo akhir dengan bunga per bulan selama 11 bulan
                    $saldoAkhir = $saldoAwal;
                    for ($i = 1; $i <= $bulan; $i++) {
                        $saldoAkhir += $saldoAkhir * $bunga; // menambahkan bunga ke saldo akhir
                    }

                    echo "Saldo akhir setelah ".$bulan." bulan adalah: Rp. ".number_format($saldoAkhir, 2, ',', '.'); 
                ?>
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
            Tugas Praktikum 2
        </button>
    </div>

<!-- Modal Tugas Praktikum 2 -->
<div class="modal fade" id="TugasPraktikum2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tugas Praktikum 2</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Soal:</strong> Buatlah program (dalam satu file) untuk menghitung bangun ruang kerucut dengan rumus seperti berikut:</p>
                <ul>
                    <li>Luas alas = π r²</li>
                    <li>Luas permukaan = π r² + π r s</li>
                </ul>
                <p><strong>Jawaban:</strong></p>

                <?php
                    // Variabel
                    $r = 7; // jari-jari kerucut
                    $s = 10; // panjang sisi (garis pelukis)
                    $pi = 3.14; // nilai pi

                    // Menghitung luas alas
                    $luasAlas = $pi * $r * $r;

                    // Menghitung luas permukaan
                    $luasPermukaan = $pi * $r * $r + $pi * $r * $s;

                    echo "Luas alas kerucut adalah: " . $luasAlas . " <br>";
                    echo "Luas permukaan kerucut adalah: " . $luasPermukaan . " <br>";
                ?>

                <!-- Div dengan margin-top -->
                <div style="margin-top: 5px;">
                    <!-- Anda dapat menambahkan elemen lain di sini jika perlu -->
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
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
        Tugas 3 - Struktur dasar PHP
    </button>
</div>

<!-- Modal for Displaying PDF - Tugas Praktikum 4 -->
<div class="modal fade" id="pdfTugas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tugas 3 - Struktur dasar PHP</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Displaying PDF in iframe -->
                <iframe src="img/Tugas3_DickyIrawan_054.pdf" width="100%" height="500px" frameborder="0"></iframe>
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
