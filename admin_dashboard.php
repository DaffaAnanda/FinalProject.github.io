<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'Administrator') {
    header('Location: login.php');
    exit();
}

// Ambil data pengguna dari session
$userName = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sandstone/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h1>Welcome, Admin <?php echo $userName; ?></h1>
    <p>Manage the platform as an Administrator.</p>
    
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Manage Users</div>
                <div class="card-body">
                    <a href="manage_users.php" class="btn btn-primary">Manage Users</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Manage Heavy Equipment</div>
                <div class="card-body">
                    <a href="manage_equipment.php" class="btn btn-primary">Manage Equipment</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">View Transactions</div>
                <div class="card-body">
                    <a href="view_transactions.php" class="btn btn-primary">View Transactions</a>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</div>

</body>
</html>