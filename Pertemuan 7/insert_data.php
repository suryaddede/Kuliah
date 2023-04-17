<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "my_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTo liga (kode, negara, champion)
VALUES ('Jer', 'Jerman', 4), ('Spa', 'Spanyol', 3), ('Eng', 'Inggris', 3)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>