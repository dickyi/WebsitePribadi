<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['login']) || $_SESSION['login'] !== 1) {
    // If not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username']; // Retrieve username from session
$password = $_SESSION['password']; // Retrieve password from session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login Details</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        .container {
            max-width: 600px;
            margin-top: 50px;
            text-align: center;
        }
        .card {
            border-radius: 10px;
            padding: 20px;
            background-color: #f8f9fa;
        }
        .card-header {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .card-body {
            font-size: 1.2rem;
        }
        .btn-back {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn-back:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body class="bg-light">

<div class="container">
    <div class="card shadow-lg">
        <div class="card-header">
            <h3>Login Details</h3>
        </div>
        <div class="card-body">
            <p><strong>Username:</strong> <?php echo $username; ?></p>
            <p><strong>Password:</strong> <?php echo $password; ?></p> <!-- Now password is correctly displayed -->
        </div>
        <div class="card-footer">
            <a href="index.php" class="btn-back">Access Your Dashboard 🔥</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
