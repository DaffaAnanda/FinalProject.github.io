<?php
$host = "localhost"; // Host
$user = "root"; // Username
$password = ""; // Password
$dbname = "heavy_rental_management"; // Nama database

// Buat koneksi
$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
