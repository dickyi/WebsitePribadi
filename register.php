<?php

session_start();
$errorMessage = "";
$successMessage = "";

$user_file = "users.txt"; 


if (!file_exists($user_file)) {
    file_put_contents($user_file, "");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $email = $_POST['email'];

    if (empty($username) || empty($password) || empty($confirm_password) || empty($email)) {
        $errorMessage = "Semua field harus diisi!";
    } elseif ($password != $confirm_password) {
        $errorMessage = "Password dan Confirm Password tidak cocok!";
    } elseif (strlen($password) < 6) {
        $errorMessage = "Password harus memiliki minimal 6 karakter!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = "Email tidak valid!";
    } else {

        $username = htmlspecialchars($username);
        $password = htmlspecialchars($password);
        $email = htmlspecialchars($email);

        $users = file($user_file, FILE_IGNORE_NEW_LINES); 
        $user_exists = false;

        foreach ($users as $user) {
            $user_data = explode(",", $user); 
            if (count($user_data) == 3) {
                list($stored_username, $stored_email, $stored_password) = $user_data;

                if ($stored_username == $username || $stored_email == $email) {
                    $user_exists = true;
                    break;
                }
            }
        }

        if ($user_exists) {
            $errorMessage = "Username atau Email sudah terdaftar, pilih username atau email lain!";
        } else {

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $user_data = $username . "," . $email . "," . $hashed_password . "\n";  
            file_put_contents($user_file, $user_data, FILE_APPEND);  

            $successMessage = "User berhasil didaftarkan! Silakan kembali ke halaman login!";
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
    <title>Dicky Irawan</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                </div>
                                <div class="card-body">
                      
                                    <?php
                                    if (!empty($errorMessage)) {
                                        echo "<div style='color: red;'>$errorMessage</div>";
                                    }
                                    if (!empty($successMessage)) {
                                        echo "<div style='color: green;'>$successMessage</div>";
                                    }
                                    ?>

                                    <form action="register.php" method="POST">
                                 
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputUsername" type="text" name="username" placeholder="Username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>" />
                                            <label for="inputUsername">Username</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" />
                                            <label for="inputEmail">Email Address</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Create a password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>" />
                                            <label for="inputPassword">Password</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPasswordConfirm" type="password" name="confirm_password" placeholder="Confirm your password" value="<?php echo isset($_POST['confirm_password']) ? $_POST['confirm_password'] : ''; ?>" />
                                            <label for="inputPasswordConfirm">Confirm Password</label>
                                        </div>

                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <?php include('footer.php'); ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>

