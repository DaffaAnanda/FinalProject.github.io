<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'Technician') {
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
    <title>Technician Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sandstone/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h1>Welcome, Technician <?php echo $userName; ?></h1>
    <p>Manage maintenance tasks for heavy equipment.</p>
    
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Equipment Under Maintenance</div>
                <div class="card-body">
                    <a href="equipment_under_maintenance.php" class="btn btn-primary">View Maintenance Tasks</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Completed Repairs</div>
                <div class="card-body">
                    <a href="completed_repairs.php" class="btn btn-primary">View Completed Repairs</a>
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
