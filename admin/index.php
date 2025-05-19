<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php"); // Jika tidak login atau bukan admin, redirect ke login
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="../assets/css/styles.css" rel="stylesheet">
</head>
<body>
    <!-- Header Admin -->
    <?php include('../header.php'); ?>

    <div class="container">
        <h1>Welcome to Admin Dashboard</h1>
        <div class="admin-panel">
            <h2>Manage Your Website</h2>
            <ul>
                <li><a href="manage_users.php">Manage Users</a></li>
                <li><a href="manage_content.php">Manage Content</a></li>
                <li><a href="settings.php">Settings</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>

    <!-- Footer Admin -->
    <?php include('../footer.php'); ?>
</body>
</html>
