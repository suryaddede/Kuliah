<?php
// Memulai session
session_start();

// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "my_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifikasi login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash password menggunakan SHA-512
    $hashed_password = hash('sha512', $password);

    // Query untuk mencari pengguna dengan username dan password yang sesuai
    $query = "SELECT * FROM users WHERE username='$username' AND password='$hashed_password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Login berhasil
        // Set session username
        $_SESSION['username'] = $username;

        // Redirect ke halaman utama
        header('Location: cetak.php');
        exit;
    } else {
        // Login gagal
        // Tampilkan pesan error
        echo "Username atau password salah";
    }
}
?>