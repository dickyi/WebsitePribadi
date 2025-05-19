<?php

session_start();
$errorMessage = "";

$user_file = "users.txt"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = htmlspecialchars($username);
    $password = htmlspecialchars($password);

    if (empty($username) && empty($password)) {
        $errorMessage = "Username dan Password harus diisi!";
    } elseif (empty($username)) {
        $errorMessage = "Username harus diisi!";
    } elseif (empty($password)) {
        $errorMessage = "Password harus diisi!";
    } else {
     
        $users = file($user_file, FILE_IGNORE_NEW_LINES); 

        $found = false;
        foreach ($users as $user) {
            $user_data = explode(",", $user); 
            if (count($user_data) == 3) {
                list($stored_username, $stored_email, $stored_password) = $user_data;

                if ($stored_username == $username || $stored_email == $username) {
    
                    if (password_verify($password, $stored_password)) {
    
                        $_SESSION['login'] = 1;
                        $_SESSION['username'] = $username;
                        $_SESSION['password'] = $password; 
                        $found = true;

                        if (isset($_POST['remember']) && $_POST['remember'] == 'on') {

                            setcookie('username', $username, time() + 15, "/"); 
                            setcookie('password', $password, time() + 15, "/"); 
                        }

                        break; 
                    } else {
                        $errorMessage = "Password salah.";
                        break;
                    }
                }
            }
        }

        if ($found) {
      
            header("location: process-login.php");
            exit();
        } else {
            $errorMessage = "Username atau Email tidak ditemukan.";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
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
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <?php if (!empty($errorMessage)): ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?php echo $errorMessage; ?>
                                        </div>
                                    <?php endif; ?>

                                    <form action="login.php" method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputUsername" type="text" name="username" placeholder="Username" value="<?php echo isset($_COOKIE['username']) ? $_COOKIE['username'] : ''; ?>" />
                                            <label for="inputUsername">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" value="<?php echo isset($_COOKIE['password']) ? $_COOKIE['password'] : ''; ?>" />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" name="remember" value="on" <?php echo isset($_COOKIE['username']) ? 'checked' : ''; ?> />
                                            <label class="form-check-label" for="inputRememberPassword">Remember Me</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password.php">Forgot Password?</a>
                                            <button type="submit" class="btn btn-primary">Login</button>
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

        <?php include('footer.php'); ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
