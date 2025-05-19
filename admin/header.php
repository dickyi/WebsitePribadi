<!-- header.php -->
<div id="layoutAdmin">
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="text-center mb-4">
            <h4>Admin Panel</h4>
        </div>
        <a href="dashboard.php">Dashboard</a>
        <a href="manage_users.php">Manage Users</a>
        <a href="manage_content.php">Manage Content</a>
        <a href="setting.php">Settings</a>
        <a href="reports.php">Reports</a>
        <a href="Logout.php">Logout</a>
      <a href="../index.php" class="back-to-web">Back To Web Portfolio</a>
    </div>

    <!-- Content -->
    <div class="content">
        <div class="header">
            <?php
            // Menampilkan username jika sudah login
            if (isset($_SESSION['username'])) {
                echo "Welcome, " . $_SESSION['username']; // Display username if logged in
            } else {
                echo "Login"; // Display Login if not logged in
            }
            ?>
        </div>
