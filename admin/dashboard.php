<?php
session_start();

// Memastikan file bisa dibuka dengan path yang benar
$file = fopen("../users.txt", "r");  // Menambahkan ../ untuk keluar dari folder admin
if (!$file) {
    die("Error: Unable to open the users.txt file.");
}

$users = [];
$totalActiveUsers = 0; // Variabel untuk menghitung Active Users

while (($line = fgets($file)) !== false) {
    $user_data = explode(",", trim($line)); // Memisahkan data berdasarkan koma
    if (count($user_data) >= 3) {
        // Menambahkan data pengguna ke array
        $users[] = [
            'username' => $user_data[0],
            'email' => $user_data[1],
            'status' => 'Active' // Anda bisa menentukan status berdasarkan kebutuhan
        ];

        // Menghitung Active Users
        if ($user_data[2] == 'Active') {
            $totalActiveUsers++;
        }
    }
}

fclose($file);

// Menghitung Total Users (jumlah total pengguna dalam array $users)
$totalUsers = count($users); // Menambahkan perhitungan jumlah total pengguna
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styleDashboard.css">
</head>

<body>
    <?php include('header.php'); // Memanggil file header.php ?>
    

    <!-- Dashboard Stats -->
    <div class="container">
        <div class="row">
            <!-- Total Users -->
            <div class="col-md-4">
                <div class="card-stat">
                    <h5>Total Users</h5>
                    <p><?php echo $totalUsers; ?></p>
                </div>
            </div>
            <!-- Active Users -->
            <div class="col-md-4">
                <div class="card-stat">
                    <h5>Active Users</h5>
                    <!-- <p><?php echo $totalActiveUsers; ?></p> -->
                    <p>1</p>
                </div>
            </div>
            <!-- Pending Requests -->
            <div class="col-md-4">
                <div class="card-stat">
                    <h5>Content</h5>
                    <p>5</p>
                </div>
            </div>
        </div>

        <!-- User Data Table -->
        <div class="table-responsive">
            <h3>User Data</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <!-- <th>Action</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $index = 1;
                    foreach ($users as $user) {
                        echo "<tr>";
                        echo "<td>{$index}</td>";
                        echo "<td>{$user['username']}</td>";
                        echo "<td>{$user['email']}</td>";
                        echo "<td>{$user['status']}</td>";
                        // echo "<td><button class='btn btn-warning btn-sm'>Edit</button></td>";
                        echo "</tr>";
                        $index++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
