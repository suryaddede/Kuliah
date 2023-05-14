<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .warning {
            color: #FF0000;
        }
    </style>
</head>

<body class="bg-dark text-light">
    <?php
    $error_nama = "";
    $error_email = "";
    $error_web = "";
    $error_pesan = "";
    $error_telp = "";

    $nama = "";
    $email = "";
    $web = "";
    $pesan = "";
    $telp = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama"])) {
            $error_nama = "Nama tidak boleh kosong";
        } else {
            $nama = cek_input($_POST["nama"]);
            if (!preg_match("/^[a-zA-Z]*$/", $nama)) {
                $nameErr = "Inputan hanya boleh huruf dan spasi";
            }
        }

        if (empty($_POST["email"])) {
            $error_email = "Email tidak boleh kosong";
        } else {
            $email = cek_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error_email = "Format email invalid";
            }
        }

        if (empty($_POST["pesan"])) {
            $error_pesan = "Pesan tidak boleh kosong";
        } else {
            $pesan = cek_input($_POST["pesan"]);
        }

        if (empty($_POST["web"])) {
            $error_web = "Website tidak boleh kosong";
        } else {
            $web = cek_input($_POST["web"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $web)) {
                $error_web = "URL tidak valid";
            }
        }

        if (empty($_POST["telp"])) {
            $error_telp = "Telepon tidak boleh kosong";
        } else {
            $telp = cek_input($_POST["telp"]);
            if (!is_numeric($telp)) {
                $error_telp = "Nomor HP hanya boleh angka";
            }
        }
    }

    function cek_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <div class="card-header bg-secondary">
        <h3 class="text-center">Contoh Validasi Form dengan PHP</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card-body">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control <?php echo ($error_nama != "" ? "is-invalid" : ""); ?>" id="nama" placeholder="Nama" value="<?php echo $nama; ?>"><span class="warning"><?php echo $error_nama; ?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">EMail</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" class="form-control <?php echo ($error_email != "" ? "is-invalid" : ""); ?>" id="email" placeholder="email" value="<?php echo $email; ?>"><span class="warning"><?php echo $error_email; ?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="web" class="col-sm-2 col-form-label">Website</label>
                            <div class="col-sm-10">
                                <input type="text" name="web" class="form-control <?php echo ($error_web != "" ? "is-invalid" : ""); ?>" id="web" placeholder="web" value="<?php echo $web; ?>"><span class="warning"><?php echo $error_web; ?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telp" class="col-sm-2 col-form-label">Telp</label>
                            <div class="col-sm-10">
                                <input type="text" name="telp" class="form-control <?php echo ($error_telp != "" ? "is-invalid" : ""); ?>" id="telp" placeholder="telp" value="<?php echo $telp; ?>"><span class="warning"><?php echo $error_telp; ?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                            <div class="col-sm-10">
                                <textarea name="pesan" class="form-control <?php echo ($error_pesan != "" ? "is-invalid" : ""); ?>"><?php echo $pesan; ?></textarea><span class="warning"><?php echo $error_pesan; ?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button class="btn btn-primary" type="submit" name="submit">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        echo "<h2>Your Input:</h2>";
        echo "Nama = " . $nama;
        echo "<br>";
        echo "Email = " . $email;
        echo "<br>";
        echo "Website = " . $web;
        echo "<br>";
        echo "Telp = " . $telp;
        echo "<br>";
        echo "Pesan = " . $pesan;
        ?>
    </div>

</body>

</html>