<?php
include 'config.php';

// Tangkap data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $role = $_POST['role']; // Tangkap nilai role

    // Query untuk mengecek apakah email sudah terdaftar
    $checkEmail = "SELECT * FROM Users WHERE email = ?";
    $stmt = $conn->prepare($checkEmail);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Jika email sudah ada
        echo "<script>alert('Email sudah terdaftar!'); window.location.href='register.php';</script>";
    } else {
        // Query untuk menambah data pengguna baru
        $insertUser = "INSERT INTO Users (name, email, password, phone, address, role) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insertUser);
        $stmt->bind_param("ssssss", $name, $email, $password, $phone, $address, $role); // Menambahkan role

        if ($stmt->execute()) {
            // Jika registrasi berhasil, arahkan ke halaman login
            echo "<script>alert('Registrasi berhasil!'); window.location.href='login.php';</script>";
        } else {
            // Jika gagal
            echo "<script>alert('Terjadi kesalahan. Silakan coba lagi.'); window.location.href='register.php';</script>";
        }
    }

    $stmt->close();
    $conn->close();
}
?>
