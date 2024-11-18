<?php
include 'config.php';

// Tangkap data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk mengecek apakah email ada di database
    $checkUser = "SELECT * FROM Users WHERE email = ?";
    $stmt = $conn->prepare($checkUser);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        
        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            // Jika password benar, simpan session dan arahkan ke Dashboard
            session_start();
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['role'] = $user['role'];

            // Redirect ke dashboard berdasarkan role
            if ($user['role'] == 'Administrator') {
                header('Location: admin_dashboard.php');
            } elseif ($user['role'] == 'Customer') {
                header('Location: costumer_dashboard.php');
            } elseif ($user['role'] == 'Vendor') {
                header('Location: vendor_dashboard.php');
            } else {
                header('Location: technician_dashboard.php');
            }
            exit();
        } else {
            // Jika password salah
            echo "<script>alert('Password salah!'); window.location.href='login.php';</script>";
        }
    } else {
        // Jika email tidak terdaftar
        echo "<script>alert('Email tidak terdaftar!'); window.location.href='login.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
