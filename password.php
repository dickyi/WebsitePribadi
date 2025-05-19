<?php
// Import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';  // Path ini yang harus digunakan



// Mulai session
session_start();
$errorMessage = "";
$successMessage = "";

// File yang menyimpan data pengguna
$user_file = "users.txt"; // Anda bisa menyesuaikan nama file sesuai kebutuhan

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $email = $_POST['email'];

    // Validasi input
    if (empty($email)) {
        $errorMessage = "Email harus diisi!";
    } else {
        // Cek apakah email terdaftar
        $users = file($user_file, FILE_IGNORE_NEW_LINES); // Membaca semua baris dalam file
        $email_exists = false;

        foreach ($users as $user) {
            list($stored_username, $stored_email, $stored_password) = explode(",", $user);
            if ($stored_email == $email) {
                $email_exists = true;
                break;
            }
        }

        if ($email_exists) {
            // Mengirimkan email reset password menggunakan PHPMailer
            $reset_link = "http://yourwebsite.com/reset-password.php?email=" . urlencode($email);
            $subject = "Password Reset Request";
            $message = "Hello, click the following link to reset your password: " . $reset_link;

            // Konfigurasi PHPMailer
            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->isSMTP();                                            // Set email using SMTP
                $mail->Host       = 'smtp.gmail.com';                        // SMTP server
                $mail->SMTPAuth   = true;                                    // Enable SMTP authentication
                $mail->Username   = 'your-email@gmail.com';                  // SMTP username (your email)
                $mail->Password   = 'your-email-password';                   // SMTP password (your email password)
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          // Enable TLS encryption
                $mail->Port       = 587;                                     // TCP port

                //Recipients
                $mail->setFrom('your-email@gmail.com', 'Your Name'); // From email address
                $mail->addAddress($email);                                 // Add recipient email address

                // Content
                $mail->isHTML(true);                                          // Set email format to HTML
                $mail->Subject = $subject;
                $mail->Body    = $message;

                $mail->send();
                $successMessage = "Link reset password telah dikirim ke email Anda!";
            } catch (Exception $e) {
                $errorMessage = "Gagal mengirim email. Coba lagi nanti. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            $errorMessage = "Email tidak ditemukan.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Password Recovery</h3></div>
                                <div class="card-body">
                                    <div class="small mb-3 text-muted">Enter your email address and we will send you a link to reset your password.</div>

                                    <!-- Menampilkan pesan error atau sukses jika ada -->
                                    <?php
                                    if (!empty($errorMessage)) {
                                        echo "<div style='color: red;'>$errorMessage</div>";
                                    }
                                    if (!empty($successMessage)) {
                                        echo "<div style='color: green;'>$successMessage</div>";
                                    }
                                    ?>

                                    <!-- Form untuk password recovery -->
                                    <form action="forgot-password.php" method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" required />
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="login.php">Return to login</a>
                                            <button class="btn btn-primary" type="submit">Reset Password</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <!-- Include Footer PHP file here -->
        <?php include('footer.php'); ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
