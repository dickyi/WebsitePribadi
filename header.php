
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dicky Irawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/styleHeader11.css">

 
</head>
<body>

<div class="container">
    <!-- Membuat logo dan judul berada dalam satu baris -->
    <div class="d-flex align-items-center">
        <img src="img/logo.png" alt="Logo Dicky Irawan" width="50">
        <h1 class="ms-2">Dicky Irawan();</h1>
    </div>

    <!-- Navbar Section -->
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="profile.php">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="cardPortfolio.php">PortFolio</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Blog.php">Blog</a>

        </li>
        <li class="nav-item">
            <a class="nav-link" href="contacs.php" aria-disabled="true">Contacs</a>
        </li>
    </ul>

    <!-- Tombol Login yang diletakkan di pojok kanan dengan Account dropdown -->
    <div class="dropdown login-btn">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <?php
            // Check if the user is logged in
            if (isset($_SESSION['username'])) {
                echo "Welcome, " . $_SESSION['username']; // Display username if logged in
            } else {
                echo "Login"; // Display Login if not logged in
            }
            ?>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <?php if (isset($_SESSION['username'])): ?>
                <!-- Display account-related options if logged in -->
                <li><a class="dropdown-item" href="profile.php">View Profile</a></li>
                <li><a class="dropdown-item" href="admin/dashboard.php">Back End Admin</a></li>

                <li><a class="dropdown-item" href="Logout.php">Logout</a></li>
            <?php else: ?>
                <!-- Display login option if not logged in -->
                <li><a class="dropdown-item" href="login.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </div>
</div>


<!-- Include Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
