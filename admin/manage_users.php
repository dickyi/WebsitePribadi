<?php
session_start();

// Memastikan sesi login ada
if (!isset($_SESSION['login'])) {
    echo "<p style='color: red;'>You need to log in to access this page.</p>";
    exit(); // Menghentikan eksekusi lebih lanjut jika user tidak login
}

// Menampilkan daftar pengguna dari file users.txt
$users = [];
$file = fopen("../users.txt", "r");

if (!$file) {
    die("Error: Unable to open the users.txt file.");
}

// Membaca data dari file dan menambahkan ID secara otomatis
$id_counter = 1; // ID akan dimulai dari 1
while (($line = fgets($file)) !== false) {
    $user_data = explode(",", trim($line)); // Memisahkan data berdasarkan koma
    if (count($user_data) >= 3) {
        // Menambahkan data pengguna ke array dan menambahkan ID otomatis
        $users[] = [
            'id' => $id_counter++, // Menambahkan ID secara otomatis
            'username' => $user_data[0],
            'email' => $user_data[1],
            'password' => $user_data[2] // Tidak ditampilkan dalam tabel, hanya untuk proses edit dan validasi
        ];
    }
}

fclose($file);

// Cek jika ada pesan terkait aksi yang baru dilakukan
$message = '';
if (isset($_GET['message'])) {
    $message = htmlspecialchars($_GET['message']); // Menghindari XSS dengan htmlspecialchars
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styleManageUser.css">
</head>
<body>

    <?php include('header.php'); // Memanggil file header.php ?>

    <!-- Alert Message -->
    <?php if ($message): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <!-- Manage Users Table -->
    <div class="container mt-5">
        <h3>Manage Users</h3>
        <a href="add_user.php" class="btn btn-success mb-3">Add New User</a> <!-- Link untuk menambah user baru -->
        
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo $user['id']; ?></td>
                            <td><?php echo $user['username']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td>
                                <a href="edit_user.php?id=<?php echo $user['id']; ?>" class="btn btn-warning btn-sm">Edit</a> 
                                <a href="delete_user.php?id=<?php echo $user['id']; ?>" class="btn btn-danger btn-sm">Delete</a> 
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>
