<?php
session_start();

// Memastikan sesi login ada
if (!isset($_SESSION['login'])) {
    echo "<p style='color: red;'>You need to log in to access this page.</p>";
    exit(); // Menghentikan eksekusi lebih lanjut jika user tidak login
}

// Cek apakah form pengaturan dikirimkan
if (isset($_POST['update_settings'])) {
    // Ambil data dari formulir (misalnya untuk mengubah password)
    $new_password = trim($_POST['new_password']);
    $confirm_password = trim($_POST['confirm_password']);
    
    // Validasi password baru
    if ($new_password !== $confirm_password) {
        echo "<p style='color: red;'>Passwords do not match!</p>";
    } else {
        // Update password (misalnya dengan menyimpannya ke dalam database atau file)
        // Contoh: menyimpan password ke file (pastikan password di-hash sebelum disimpan untuk keamanan)
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        
        // Update password di file atau database
        // Misalnya update di file users.txt (untuk contoh ini saja)
        $file = '../data/users.txt';
        $users = file($file, FILE_IGNORE_NEW_LINES);
        
        foreach ($users as &$user) {
            list($username, $email, $password) = explode(",", $user);
            if ($username === $_SESSION['username']) {
                $user = $username . "," . $email . "," . $hashed_password;
                break;
            }
        }

        // Simpan kembali ke file
        file_put_contents($file, implode("\n", $users));

        echo "<p style='color: green;'>Password successfully updated!</p>";
    }
}
?>

<!-- Memanggil file header.php untuk header halaman -->
<?php include('header.php'); // Memanggil file header.php ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styleSetting.css">
</head>
<body>

    <!-- Pengaturan Akun -->
    <div class="container mt-5">
        <h3>Pengaturan Admin</h3>

        <!-- Formulir untuk Mengubah Password -->
        <form action="setting.php" method="POST">
            <div class="card mb-4">
                <div class="card-header">Ubah Password</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="new_password" class="form-label">Password Baru:</label>
                        <input type="password" id="new_password" name="new_password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Konfirmasi Password Baru:</label>
                        <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
                    </div>

                    <button type="submit" name="update_settings" class="btn btn-primary">Update Password</button>
                </div>
            </div>
        </form>

        <hr>

        <!-- Pengaturan Profil (Nama Pengguna dan Email) -->
        <div class="card">
            <div class="card-header">Pengaturan Profil</div>
            <div class="card-body">
                <form action="setting.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Nama Pengguna:</label>
                        <input type="text" id="username" name="username" class="form-control" value="<?php echo $_SESSION['username']; ?>" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" 
                               value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Profil</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>
