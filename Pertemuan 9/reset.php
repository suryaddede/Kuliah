<?php
$email = $_POST['email'];

// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "my_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mencari email yang cocok
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

// Jika email ditemukan
if ($result->num_rows > 0) {
    // Kirim tautan reset password
    echo "Tautan reset password telah dikirim ke email: ";
    ?>
    <a href="mailto:<?php echo $email; ?>"><?php echo $email ?></a>
    <?php
} else {
    // Jika email tidak ditemukan
    echo "Email tidak terdaftar di database.";
}

$conn->close();
?>