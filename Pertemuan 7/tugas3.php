<!DOCTYPE html>
<html>

<head>
    <title>Data Pegawai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        th,
        td {
            vertical-align: middle !important;
        }
    </style>
    <script src="https://kit.fontawesome.com/42e7da2808.js" crossorigin="anonymous"></script>
</head>

<body class="bg-dark text-light">
    <div class="container">
        <h1 class="text-center py-4">Data Pegawai</h1>
        <?php
        // Konfigurasi database
        $host = "localhost";
        $username = "root";
        $password = "root";
        $database = "my_db";

        // Membuat koneksi ke database
        $conn = mysqli_connect($host, $username, $password, $database);

        // Mengecek koneksi
        if (!$conn) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }

        // Menyimpan data pegawai
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["simpan"])) {
            $nama = $_POST["nama"];
            $alamat = $_POST["alamat"];
            $no_telp = $_POST["no_telp"];

            $sql = "INSERT INTO pegawai (nama, alamat, no_telp) VALUES ('$nama', '$alamat', '$no_telp')";

            if (mysqli_query($conn, $sql)) {
                echo "<div class='alert alert-success' role='alert'>Data berhasil disimpan</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</div>";
            }
        }

        // Menghapus data pegawai
        if (isset($_GET["hapus"])) {
            $id = $_GET["hapus"];

            $sql = "DELETE FROM pegawai WHERE id_pegawai=$id";

            if (mysqli_query($conn, $sql)) {
                echo "<div class='alert alert-success' role='alert'>Data berhasil dihapus</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</div>";
            }
        }

        // Mengubah data pegawai
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["ubah"])) {
            $id = $_POST["id"];
            $nama = $_POST["nama"];
            $alamat = $_POST["alamat"];
            $no_telp = $_POST["no_telp"];

            $sql = "UPDATE pegawai SET nama='$nama', alamat='$alamat', no_telp='$no_telp' WHERE id_pegawai=$id";

            if (mysqli_query($conn, $sql)) {
                echo "<div class='alert alert-success' role='alert'>Data berhasil diubah</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</div>";
            }
        }

        // Form untuk menyimpan atau mengubah data pegawai
        if (isset($_GET["ubah"])) {
            $id = $_GET["ubah"];

            $sql = "SELECT * FROM pegawai WHERE id_pegawai=$id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
        ?>
            <form method="post">
                <input type="hidden" name="id" value="<?php echo $row["id_pegawai"]; ?>">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $row["nama"]; ?>">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" class="form-control" name="alamat" value="<?php echo $row["alamat"]; ?>">
                </div>
                <div class="form-group">
                    <label for="no_telp">No. Telp:</label>
                    <input type="text" class="form-control" name="no_telp" value="<?php echo $row["no_telp"]; ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="ubah">Ubah</button>
            </form>
        <?php
        } else {
        ?>
            <form method="post">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" class="form-control" name="alamat">
                </div>
                <div class="form-group">
                    <label for="no_telp">No. Telp:</label>
                    <input type="text" class="form-control" name="no_telp">
                </div>
                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
            </form>
        <?php
        }

        // Menampilkan data pegawai
        $sql = "SELECT * FROM pegawai";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        ?>
            <table class="table table-bordered table-striped text-light text-center mt-3">
                <thead>
                    <tr>
                        <th>ID Pegawai</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No. Telp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row["id_pegawai"]; ?></td>
                            <td><?php echo $row["nama"]; ?></td>
                            <td><?php echo $row["alamat"]; ?></td>
                            <td><?php echo $row["no_telp"]; ?></td>
                            <td>
                                <a href="?ubah=<?php echo $row["id_pegawai"]; ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a>
                                <a href="?hapus=<?php echo $row["id_pegawai"]; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        <?php
        } else {
            echo "<div class='alert alert-info' role='alert'>Tidak ada data pegawai</div>";
        }

        // Menutup koneksi database
        mysqli_close($conn);
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>