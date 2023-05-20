<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "root";
$database = "my_db";

$conn = mysqli_connect($host, $username, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
    echo "<br>";
}
// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$program_studi = $_POST['program_studi'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

// Query untuk memasukkan data ke database
$sql = "INSERT INTO users (username, password, nama, npm, tempat_lahir, tanggal_lahir, program_studi, alamat, email) VALUES ('$username', '$password', '$nama', '$npm', '$tempat_lahir', '$tanggal_lahir', '$program_studi', '$alamat', '$email')";

// Eksekusi query
if (mysqli_query($conn, $sql)) {
    echo "Data berhasil disimpan<br> Anda akan diarahkan ke halaman login dalam 5 detik";
    echo "<br>";
    echo "$username";
    echo "<br>";
    echo "$nama";
    echo "<br>";
    echo "$npm";
    echo "<br>";
    echo "$tempat_lahir";
    echo "<br>";
    echo "$tanggal_lahir";
    echo "<br>";
    echo "$program_studi";
    echo "<br>";
    echo "$alamat";
    echo "<br>";
    echo "$email";
    echo "<br>";
    echo "$alamat";
    echo "<br>";
    header("refresh:5;url=login.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>