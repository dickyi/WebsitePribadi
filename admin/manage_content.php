<?php
session_start();

// Memastikan sesi login ada
if (!isset($_SESSION['login'])) {
    echo "<p style='color: red;'>You need to log in to access this page.</p>";
    exit(); // Menghentikan eksekusi lebih lanjut jika user tidak login
}

// Menambahkan konten baru (Menangani pengiriman formulir)
if (isset($_POST['add_content'])) {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $summary = trim($_POST['summary']);
    $tags = isset($_POST['tags']) ? $_POST['tags'] : [];
    $image = trim($_POST['image']);
    $category = trim($_POST['category']);
    $status = 'published';  // Status artikel
    $author = $_SESSION['username']; // Mengambil nama pengguna dari session
    $created_at = date("Y-m-d H:i:s");
    $updated_at = date("Y-m-d H:i:s");

    // Menyimpan konten baru ke dalam file JSON
    $file = '../data/content.json'; // Tentukan lokasi file
    $new_content = array(
        'title' => htmlspecialchars($title),
        'author' => htmlspecialchars($author),
        'created_at' => $created_at,
        'updated_at' => $updated_at,
        'content' => htmlspecialchars($content),
        'summary' => htmlspecialchars($summary),
        'tags' => $tags,
        'image' => htmlspecialchars($image),
        'category' => htmlspecialchars($category),
        'status' => $status
    );

    // Membaca data lama dari file JSON
    if (file_exists($file)) {
        $json_data = json_decode(file_get_contents($file), true);
        // Cek jika data JSON berhasil didecode
        if ($json_data === null) {
            echo "<p style='color: red;'>Data JSON tidak valid atau kosong!</p>";
            exit();
        }
    } else {
        $json_data = array();
    }

    // Menambahkan konten baru ke dalam array
    $json_data[] = $new_content;

    // Menyimpan kembali data ke file JSON
    file_put_contents($file, json_encode($json_data, JSON_PRETTY_PRINT));

    echo "<p style='color: green;'>Konten berhasil ditambahkan!</p>";
}

// Menghapus konten (jika tombol hapus ditekan)
if (isset($_GET['delete'])) {
    $delete_title = $_GET['delete'];

    // Membaca data konten
    $file = '../data/content.json';
    if (file_exists($file)) {
        $json_data = json_decode(file_get_contents($file), true);
        // Cek jika data JSON berhasil didecode
        if ($json_data === null) {
            echo "<p style='color: red;'>Data JSON tidak valid atau kosong!</p>";
            exit();
        }
    } else {
        echo "<p style='color: red;'>File JSON tidak ditemukan!</p>";
        exit();
    }

    // Menghapus konten berdasarkan title
    foreach ($json_data as $key => $content) {
        if ($content['title'] === $delete_title) {
            unset($json_data[$key]);
            break;
        }
    }

    // Menyimpan data yang sudah dihapus kembali ke file JSON
    file_put_contents($file, json_encode(array_values($json_data), JSON_PRETTY_PRINT));

    echo "<p style='color: green;'>Konten berhasil dihapus!</p>";
}
?>

<!-- Memanggil file header.php untuk header halaman -->
<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Konten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Menggunakan Bootstrap -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styleManageContent.css"> <!-- Menggunakan file CSS eksternal -->
</head>
<body>

    <!-- Pengaturan Akun -->
    <div class="container mt-5">
        <h3>Kelola Konten</h3>

        <!-- Formulir untuk menambahkan konten baru -->
        <form action="manage_content.php" method="POST">
            <div class="card mb-4">
                <div class="card-header">Tambahkan Konten Baru</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul:</label>
                        <input type="text" id="title" name="title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Konten:</label>
                        <textarea id="content" name="content" rows="5" class="form-control" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="summary" class="form-label">Ringkasan:</label>
                        <textarea id="summary" name="summary" rows="3" class="form-control" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags:</label>
                        <input type="text" id="tags" name="tags" class="form-control" placeholder="Misalnya: Web Design, UX" required>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar:</label>
                        <input type="text" id="image" name="image" class="form-control" placeholder="URL Gambar" required>
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Kategori:</label>
                        <input type="text" id="category" name="category" class="form-control" placeholder="Kategori artikel" required>
                    </div>

                    <button type="submit" name="add_content" class="btn btn-primary">Tambah Konten</button>
                </div>
            </div>
        </form>

        <hr>

        <!-- Daftar Konten yang Ada -->
        <div class="card">
            <div class="card-header">Konten yang Ada</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Tanggal Dibuat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Membaca konten yang sudah ada dari file JSON
                            $file = '../data/content.json';
                            if (file_exists($file)) {
                                $json_data = json_decode(file_get_contents($file), true);
                                // Cek jika data JSON berhasil didecode
                                if ($json_data === null) {
                                    echo "<tr><td colspan='4' class='text-center'>Data JSON tidak valid atau kosong!</td></tr>";
                                } else {
                                    foreach ($json_data as $content) {
                                        echo "<tr>";
                                        echo "<td>" . htmlspecialchars($content['title']) . "</td>";
                                        echo "<td>" . htmlspecialchars($content['author']) . "</td>";
                                        echo "<td>" . htmlspecialchars($content['created_at']) . "</td>";
                                        echo "<td>";
                                        echo "<a href='edit_content.php?id=" . urlencode($content['title']) . "' class='btn btn-info btn-sm'>Edit</a> ";
                                        echo "<a href='manage_content.php?delete=" . urlencode($content['title']) . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure you want to delete this content?\")'>Hapus</a>";
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                }
                            } else {
                                echo "<tr><td colspan='4' class='text-center'>File JSON tidak ditemukan!</td></tr>";
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
