<?php
session_start();

// Memastikan sesi login ada
if (!isset($_SESSION['login'])) {
    echo "<p style='color: red;'>You need to log in to access this page.</p>";
    exit(); // Menghentikan eksekusi lebih lanjut jika user tidak login
}

// Menambahkan laporan baru (Menangani pengiriman formulir)
if (isset($_POST['add_report'])) {
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $created_at = date("Y-m-d H:i:s");

    // Menyimpan laporan baru ke dalam file JSON
    $file = '../data/reports.json'; // Tentukan lokasi file

    // Cek jika folder 'data' ada, jika tidak, buat folder
    if (!is_dir('../data')) {
        mkdir('../data', 0777, true);  // Membuat folder 'data' jika belum ada
    }

    // Cek jika file 'reports.json' ada, jika tidak, buat file baru
    if (!file_exists($file)) {
        file_put_contents($file, json_encode([], JSON_PRETTY_PRINT));  // Membuat file JSON kosong jika belum ada
    }

    // Membaca data lama dari file JSON
    $json_data = json_decode(file_get_contents($file), true);

    // Menambahkan laporan baru ke dalam array
    $new_report = array(
        'title' => htmlspecialchars($title),
        'description' => htmlspecialchars($description),
        'created_at' => $created_at
    );
    $json_data[] = $new_report;

    // Menyimpan kembali data ke file JSON
    if (!file_put_contents($file, json_encode($json_data, JSON_PRETTY_PRINT))) {
        echo "<p style='color: red;'>Failed to save report. Please check file permissions.</p>";
    } else {
        echo "<p style='color: green;'>Laporan berhasil ditambahkan!</p>";
    }
}

// Menghapus laporan (jika tombol hapus ditekan)
if (isset($_GET['delete'])) {
    $delete_title = $_GET['delete'];

    // Membaca data laporan
    $file = '../data/reports.json';
    $json_data = json_decode(file_get_contents($file), true);

    // Menghapus laporan berdasarkan title
    foreach ($json_data as $key => $report) {
        if ($report['title'] === $delete_title) {
            unset($json_data[$key]);
            break;
        }
    }

    // Menyimpan data yang sudah dihapus kembali ke file JSON
    file_put_contents($file, json_encode(array_values($json_data), JSON_PRETTY_PRINT));

    echo "<p style='color: green;'>Laporan berhasil dihapus!</p>";
}
?>

<!-- Memanggil file header.php untuk header halaman -->
<?php include('header.php'); // Memanggil file header.php ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styleReports.css"> <!-- Menggunakan file CSS eksternal -->
</head>
<body>

    <!-- Alert Message -->
    <?php if (isset($message) && $message): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <!-- Laporan Section -->
    <div class="container mt-5">
        <h3>Laporan Admin</h3>

        <!-- Formulir untuk menambahkan laporan baru -->
        <form action="reports.php" method="POST">
            <div class="card mb-4">
                <div class="card-header">Tambah Laporan Baru</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul Laporan:</label>
                        <input type="text" id="title" name="title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi Laporan:</label>
                        <textarea id="description" name="description" rows="5" class="form-control" required></textarea>
                    </div>

                    <button type="submit" name="add_report" class="btn btn-primary">Tambah Laporan</button>
                </div>
            </div>
        </form>

        <hr>

        <!-- Daftar Laporan -->
        <div class="card">
            <div class="card-header">Daftar Laporan</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul Laporan</th>
                                <th>Deskripsi</th>
                                <th>Tanggal Dibuat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Membaca laporan yang sudah ada dari file JSON
                            $file = '../data/reports.json';
                            if (file_exists($file)) {
                                $json_data = json_decode(file_get_contents($file), true);
                                $i = 1; // Untuk nomor urut
                                foreach ($json_data as $report) {
                                    echo "<tr>";
                                    echo "<td>" . $i++ . "</td>";
                                    echo "<td>" . htmlspecialchars($report['title']) . "</td>";
                                    echo "<td>" . htmlspecialchars($report['description']) . "</td>";
                                    echo "<td>" . htmlspecialchars($report['created_at']) . "</td>";
                                    echo "<td>";
                                    echo "<a href='view_report.php?id=" . urlencode($report['title']) . "' class='btn btn-info btn-sm'>Lihat</a> ";
                                    echo "<a href='reports.php?delete=" . urlencode($report['title']) . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure you want to delete this report?\")'>Hapus</a>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='5' class='text-center'>Tidak ada laporan yang tersedia.</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>
