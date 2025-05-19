<?php
// Mulai session
session_start();
$errorMessage = "";
$successMessage = "";

// Cek apakah parameter email ada dalam URL
if (isset($_GET['email'])) {
    $email = $_GET['email'];

    // Validasi jika email tidak kosong
    if (empty($email)) {
        $errorMessage = "Email tidak valid.";
    }
} else {
    $errorMessage = "Email tidak ditemukan.";
}

// Memproses formulir reset password
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil password baru dari form
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Validasi input
    if (empty($new_password) || empty($confirm_password)) {
        $errorMessage = "Semua kolom harus diisi.";
    } elseif ($new_password !== $confirm_password) {
        $errorMessage = "Kata sandi tidak cocok.";
    } elseif (strlen($new_password) < 6) {
        $errorMessage = "Password harus memiliki minimal 6 karakter!";
    } else {
        // Proses untuk mengganti password, misalnya menyimpannya dalam database atau file

        // Misalnya, menggunakan file 'users.txt' untuk menyimpan data pengguna
        $user_file = "users.txt";
        $users = file($user_file, FILE_IGNORE_NEW_LINES);
        $found = false;
        $updated_users = [];

        // Loop untuk mencari user yang sesuai dengan email dan memperbarui password
        foreach ($users as $user) {
            list($stored_username, $stored_email, $stored_password) = explode(",", $user);
            if ($stored_email == $email) {
                $found = true;
                // Meng-hash password baru
                $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                // Menambahkan user baru dengan password yang telah di-hash
                $updated_users[] = $stored_username . "," . $stored_email . "," . $hashed_password;
            } else {
                $updated_users[] = $user;
            }
        }

        if ($found) {
            // Menyimpan perubahan ke file
            file_put_contents($user_file, implode(PHP_EOL, $updated_users));
            $successMessage = "Kata sandi berhasil diperbarui.";
        } else {
            $errorMessage = "Email tidak terdaftar.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Reset Password</h3>
                                </div>
                                <div class="card-body">
                                    <!-- Menampilkan pesan error atau sukses jika ada -->
                                    <?php
                                    if (!empty($errorMessage)) {
                                        echo "<div style='color: red;'>$errorMessage</div>";
                                    }
                                    if (!empty($successMessage)) {
                                        echo "<div style='color: green;'>$successMessage</div>";
                                    }
                                    ?>

                                    <!-- Form untuk reset password -->
                                    <form action="reset-password.php?email=<?php echo $email; ?>" method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputNewPassword" type="password" name="new_password" placeholder="New Password" required />
                                            <label for="inputNewPassword">New Password</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputConfirmPassword" type="password" name="confirm_password" placeholder="Confirm New Password" required />
                                            <label for="inputConfirmPassword">Confirm New Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary">Reset Password</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="login.php">Return to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
