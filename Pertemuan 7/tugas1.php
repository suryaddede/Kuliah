<!DOCTYPE html>
<html>

<head>
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body class="bg-dark text-light">
    <div class="container">
        <h1 class="text-center py-4">Buku Tamu</h1>
        <form method="post">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="isi">Isi:</label>
                <textarea class="form-control" id="isi" name="isi" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
        <br>
        <?php
        // Konfigurasi database
        $host = "localhost";
        $username = "root";
        $password = "root";

        // Membuat koneksi ke database
        $conn = mysqli_connect($host, $username, $password);

        // Mengecek koneksi
        if (!$conn) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }

        // Membuat database
        $sql = "CREATE DATABASE IF NOT EXISTS my_db";

        if (mysqli_query($conn, $sql)) {
        ?>

            <script>
                console.log("Database berhasil dibuat");
            </script>

        <?php
        } else {
            echo "Error creating database: " . mysqli_error($conn);
        }

        // Menggunakan database
        mysqli_select_db($conn, "my_db");

        // Membuat tabel buku_tamu jika belum ada
        $sql = "CREATE TABLE IF NOT EXISTS buku_tamu (
            ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            NAMA VARCHAR(200) NOT NULL,
            EMAIL VARCHAR(50) NOT NULL,
            ISI TEXT NOT NULL
        )";

        if (mysqli_query($conn, $sql)) {
        ?>

            <script>
                console.log("Tabel buku_tamu berhasil dibuat");
            </script>

            <?php
        } else {
            echo "Error creating table: " . mysqli_error($conn);
        }

        // Menambahkan data awal ke tabel buku_tamu
        /*$sql = "INSERT INTO buku_tamu (NAMA, EMAIL, ISI) VALUES 
        ('Bambang Sujatmiko', 'bambangsujatmiko@gmail.com', 'Halo, ini adalah pesan dari Bambang Sujatmiko'),
        ('Budi Santoso', 'budisantoso@gmail.com', 'Halo, ini adalah pesan dari Budi Santoso'),
        ('Dwi Cahyono', 'dwicahyono@gmail.com', 'Halo, ini adalah pesan dari Dwi Cahyono')
        ON DUPLICATE KEY UPDATE ISI=VALUES(ISI);";

        if (mysqli_query($conn, $sql)) {
        ?>
    
                <script>
                    console.log("Data awal berhasil ditambahkan");
                </script>
    
        <?php
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }*/

        // Memproses form jika ada data yang dikirimkan
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST["nama"];
            $email = $_POST["email"];
            $isi = $_POST["isi"];

            // Menyimpan data ke database
            $sql = "INSERT INTO buku_tamu (NAMA, EMAIL, ISI) VALUES ('$nama', '$email', '$isi')";

            if (mysqli_query($conn, $sql)) {
            ?>

                <script>
                    console.log("Data berhasil disimpan");
                </script>

        <?php
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

        // Menampilkan data dari database
        $sql = "SELECT * FROM buku_tamu";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table class='table text-light text-center'>";
            echo "<thead><tr><th>ID</th><th>Nama</th><th>Email</th><th>Isi</th></tr></thead>";
            echo "<tbody>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["ID_BT"] . "</td>";
                echo "<td>" . $row["NAMA"] . "</td>";
                echo "<td>" . $row["EMAIL"] . "</td>";
                echo "<td>" . $row["ISI"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "Belum ada data";
        }

        // Menutup koneksi
        mysqli_close($conn);
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>