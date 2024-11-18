<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Ambil data pengguna dari session
$userName = $_SESSION['name'];
$userRole = $_SESSION['role'];

// Tampilkan dashboard berdasarkan role
echo "<h1>Welcome to Dashboard, $userName</h1>";
echo "<p>Your role: $userRole</p>";

if ($userRole == 'Administrator') {
    echo "<p>Welcome Admin! Manage the system here.</p>";
    // Tampilkan fitur admin
} elseif ($userRole == 'Customer') {
    echo "<p>Welcome Customer! View and rent equipment.</p>";
    // Tampilkan fitur customer
} elseif ($userRole == 'Vendor') {
    echo "<p>Welcome Vendor! Manage your equipment here.</p>";
    // Tampilkan fitur vendor
} elseif ($userRole == 'Technician') {
    echo "<p>Welcome Technician! Manage maintenance tasks here.</p>";
    // Tampilkan fitur technician
}
?>
