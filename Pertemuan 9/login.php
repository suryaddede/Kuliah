<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .warning {
            color: #FF0000;
        }

        .container {
            max-width: 500px;
        }
    </style>
</head>
<?php
$username = $password = "";
$error_username = $error_password = "";
?>

<body class="bg-dark text-light">
    <h1 class="text-center py-5">Sistem Informasi Akademik Fasilkom UPN Jatim</h1>
    <div class="container">
        <form method="post" action="autentikasi.php">
            <fieldset id="fieldset1" style="display:block">
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" name="username" class="form-control <?php echo ($error_username != "" ? "is-invalid" : ""); ?>" id="username" placeholder="Masukkan Username" value="<?php echo $username; ?>">
                        <span class="invalid-feedback"><?php echo $error_username; ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control <?php echo ($error_password != "" ? "is-invalid" : ""); ?>" id="password" placeholder="Masukkan Password" value="<?php echo $password; ?>">
                        <span class="invalid-feedback"><?php echo $error_password; ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <input class="btn btn-primary" type="submit" name="submit" value="Login">
                    </div>
                </div>
            </fieldset>
        </form>
        <!-- Buat tombol lupa password dan registrasi -->
        <p>Belum punya akun? <a href="registrasi.php">Registrasi</a></p>
        <p>Lupa password? <a href="lupapassword.php">Lupa Password</a></p>
        <!-- Buat validasi form login, jika username dan password salah maka tampilkan warning -->
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>

</html>