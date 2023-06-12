<?php
// Memulai session
session_start();

// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "inventory";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifikasi login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = hash('sha256', $_POST['password']);

    // Query untuk mencari pengguna dengan username dan password yang sesuai
    $query = "SELECT * FROM slogin WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Login berhasil
        // Set session username
        $_SESSION['username'] = $username;

        // Redirect ke halaman utama
        header('Location: stock/index.php');
        exit;
    } else {
        // Login gagal
        // Tampilkan pesan error
        echo "Username atau password salah";
    }
}
?>