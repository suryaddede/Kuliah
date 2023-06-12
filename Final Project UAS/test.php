<?php
// Informasi koneksi database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "inventory";

// Data yang akan disisipkan
$usernameInput = "admin";
$passwordInput = "admin";
$nicknameInput = "Admin";
$roleInput = "Warehouse Administrator";

// Meng-hash password menggunakan SHA-256
$hashedPassword = hash('sha256', $passwordInput);

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);
// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Menyiapkan pernyataan SQL
$sql = "INSERT INTO slogin (username, password, nickname, role)
        VALUES ('$usernameInput', '$hashedPassword', '$nicknameInput', '$roleInput')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disisipkan ke dalam tabel slogin.";
} else {
    echo "Terjadi kesalahan: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
