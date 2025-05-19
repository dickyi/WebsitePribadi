<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

echo "<h2>Settings</h2>";
echo "<p>Manage your website settings here.</p>";
?>
