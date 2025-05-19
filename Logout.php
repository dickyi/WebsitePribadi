<?php
// Mulai session
session_start();

// Hancurkan session
session_destroy();

// Cek jika cookies 'Remember Me' ada
if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    // Ambil waktu kedaluwarsa dari cookie atau atur nilai default jika tidak ada
    $expiration_time = time() + 15; // Sesuaikan dengan waktu kedaluwarsa yang ditetapkan saat login

    // Set cookies kembali untuk memastikan tetap aktif hingga waktu kedaluwarsa yang ditetapkan
    setcookie('username', $_COOKIE['username'], $expiration_time, '/');  // Set sesuai waktu kedaluwarsa asli
    setcookie('password', $_COOKIE['password'], $expiration_time, '/');  // Set sesuai waktu kedaluwarsa asli
} else {
    // Hapus cookies jika tidak ada
    setcookie('username', '', time() - 3600, '/');  // Hapus cookie 'username' dengan mengatur waktu kedaluwarsa ke masa lalu
    setcookie('password', '', time() - 3600, '/');  // Hapus cookie 'password' dengan mengatur waktu kedaluwarsa ke masa lalu
}

// Redirect ke halaman login
header("Location: login.php");
exit();
?>
