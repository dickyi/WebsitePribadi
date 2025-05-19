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
$nilai = 70;
if ($nilai >= 60) {
    echo "Anda Lulus dengan Nilai $nilai";
}
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
$username = "Roman Picisan";
if ($username = "Roman Picisan") {
    echo "Anda Berhasil Login, Roman";
} else {
    echo "Username Anda Salah";
}
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
$nilai = 80;

if ($nilai >= 90) {
    echo "Nilai Memuaskan";
} elseif ($nilai >= 80) {
    echo "Nilai Bagus";
} elseif ($nilai >= 50) {
    echo "Nilai Kurang";
} else {
    echo "Nilai Sangat Kurang";
}
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
        Latihan Praktikum 4
        </button>
    </div>

    <!-- Modal 4 -->
    <div class="modal fade" id="Praktikum4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Latihan Praktikum 4</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <?php
$bln = date("M");

switch($bln) {
    case "Jan" : $namaBln = "Januari"; break;
    case "Feb" : $namaBln = "Februari"; break;
    case "Mar" : $namaBln = "Maret"; break;
    case "Apr" : $namaBln = "April"; break;
    case "May" : $namaBln = "Mei"; break;
    case "Jun" : $namaBln = "Juni"; break;
    case "Jul" : $namaBln = "Juli"; break;
    case "Aug" : $namaBln = "Agustus"; break;
    case "Sep" : $namaBln = "September"; break;
    case "Oct" : $namaBln = "Oktober"; break;
    case "Nov" : $namaBln = "November"; break;
    case "Dec" : $namaBln = "Desember"; break;
}

echo "Nama bulan sekarang adalah : ".$namaBln;
?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
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
                <?php

$jumlahLembar = 158;


$hargaPerLembar = 0;


if ($jumlahLembar < 100) {
    $hargaPerLembar = 150;
} elseif ($jumlahLembar >= 100 && $jumlahLembar <= 200) {
    $hargaPerLembar = 100;
} else {
    $hargaPerLembar = 80;
}

$totalBiaya = $jumlahLembar * $hargaPerLembar;

echo "Jumlah fotocopy: " . $jumlahLembar . " lembar<br>";
echo "Harga per lembar: Rp " . $hargaPerLembar . "<br>";
echo "Total biaya fotocopy: Rp " . $totalBiaya;
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
                <!-- Hasil dari if-else -->
                <p><strong>Hasil menggunakan if-else:</strong></p>
                <?php
                    $nilai = 85;

                    // Menggunakan struktur if-else untuk menentukan grade
                    if ($nilai >= 90 && $nilai <= 100) {
                        $grade = "A";
                        $keterangan = "Baik Sekali";
                    } elseif ($nilai >= 76 && $nilai <= 89) {
                        $grade = "B";
                        $keterangan = "Baik";
                    } elseif ($nilai >= 60 && $nilai <= 75) {
                        $grade = "C";
                        $keterangan = "Cukup";
                    } elseif ($nilai >= 50 && $nilai <= 59) {
                        $grade = "D";
                        $keterangan = "Hampir Cukup";
                    } else {
                        $grade = "E";
                        $keterangan = "Kurang";
                    }

                    echo "Nilai: " . $nilai . "<br>";
                    echo "Grade: " . $grade . "<br>";
                    echo "Keterangan: " . $keterangan . "<br>";
                ?>

                <br>

                <!-- Hasil dari switch-case -->
                <p><strong>Hasil menggunakan switch-case:</strong></p>
                <?php
                    $nilai = 85;

                    // Menggunakan switch-case untuk menentukan grade
                    switch (true) {
                        case ($nilai >= 90 && $nilai <= 100):
                            $grade = "A";
                            $keterangan = "Baik Sekali";
                            break;
                        case ($nilai >= 76 && $nilai <= 89):
                            $grade = "B";
                            $keterangan = "Baik";
                            break;
                        case ($nilai >= 60 && $nilai <= 75):
                            $grade = "C";
                            $keterangan = "Cukup";
                            break;
                        case ($nilai >= 50 && $nilai <= 59):
                            $grade = "D";
                            $keterangan = "Hampir Cukup";
                            break;
                        default:
                            $grade = "E";
                            $keterangan = "Kurang";
                            break;
                    }

                    echo "Nilai: " . $nilai . "<br>";
                    echo "Grade: " . $grade . "<br>";
                    echo "Keterangan: " . $keterangan . "<br>";
                ?>
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
            Tugas Praktikum 3
        </button>
    </div>

<!-- Modal Tugas Praktikum 3 -->
<div class="modal fade" id="TugasPraktikum3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tugas Praktikum 3</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                    // Mendapatkan bulan saat ini
                    $bulan = date('n'); // 'n' untuk mendapatkan bulan dalam bentuk angka (1-12)

                    // Switch statement untuk menentukan jumlah hari berdasarkan bulan
                    switch ($bulan) {
                        case 1: // Januari
                            $hari = 31;
                            break;
                        case 2: // Februari
                            // Cek apakah tahun ini adalah tahun kabisat
                            $tahun = date('Y');
                            if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
                                $hari = 29; // Tahun kabisat
                            } else {
                                $hari = 28; // Tahun biasa
                            }
                            break;
                        case 3: // Maret
                            $hari = 31;
                            break;
                        case 4: // April
                            $hari = 30;
                            break;
                        case 5: // Mei
                            $hari = 31;
                            break;
                        case 6: // Juni
                            $hari = 30;
                            break;
                        case 7: // Juli
                            $hari = 31;
                            break;
                        case 8: // Agustus
                            $hari = 31;
                            break;
                        case 9: // September
                            $hari = 30;
                            break;
                        case 10: // Oktober
                            $hari = 31;
                            break;
                        case 11: // November
                            $hari = 30;
                            break;
                        case 12: // Desember
                            $hari = 31;
                            break;
                        default:
                            $hari = 0; // Nilai default jika terjadi kesalahan
                            break;
                    }

                    // Menampilkan bulan dan jumlah hari pada bulan tersebut
                    echo "Bulan saat ini adalah: " . date('F') . "<br>"; 
                    echo "Jumlah hari dalam bulan ini: " . $hari;
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>

    <!-- Section Title for PDF Display -->
    <h2 class="text-center mb-4">PDF Tugas</h2>

<!-- Button trigger modal - Display PDF for Tugas -->
<div class="mb-3">
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#pdfTugas">
         Tugas 4 - Pernyataan Kondisi
    </button>
</div>

<!-- Modal for Displaying PDF - Tugas Praktikum 4 -->
<div class="modal fade" id="pdfTugas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tugas 4 - Pernyataan Kondisi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Displaying PDF in iframe -->
                <iframe src="img/Tugas4_DickyIrawan_054.pdf" width="100%" height="500px" frameborder="0"></iframe>
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
