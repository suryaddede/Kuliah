<html>

<head>
    <title>Registrasi</title>
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
$username = $password = $nama = $npm = $tempat_lahir = $tanggal_lahir = $program_studi = $alamat = $email = "";
$error_username = $error_password = $error_nama = $error_npm = $error_tempat_lahir = $error_tanggal_lahir = $error_program_studi = $error_alamat = $error_email = "";
?>

<body class="bg-dark text-light">
    <h1 class="text-center py-5">Sistem Informasi Akademik Fasilkom UPN Jatim</h1>
    <div class="container">
        <form method="post" action="konfirmasiregistrasi.php">
            <fieldset id="fieldset1" style="display:block">
                <div class="form-group row">
                    <label for="username" class="col-sm-4 col-form-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" name="username" class="form-control <?php echo ($error_username != "" ? "is-invalid" : ""); ?>" id="username" placeholder="Masukkan Username" value="<?php echo $username; ?>">
                        <span class="invalid-feedback"><?php echo $error_username; ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" name="password" class="form-control <?php echo ($error_password != "" ? "is-invalid" : ""); ?>" id="password" placeholder="Masukkan Password" value="<?php echo $password; ?>">
                        <span class="invalid-feedback"><?php echo $error_password; ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" name="nama" class="form-control <?php echo ($error_nama != "" ? "is-invalid" : ""); ?>" id="nama" placeholder="Masukkan Nama Lengkap" value="<?php echo $nama; ?>">
                        <span class="invalid-feedback"><?php echo $error_nama; ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="npm" class="col-sm-4 col-form-label">NPM</label>
                    <div class="col-sm-8">
                        <input type="text" name="npm" class="form-control <?php echo ($error_npm != "" ? "is-invalid" : ""); ?>" id="npm" placeholder="Masukkan NPM" value="<?php echo $npm; ?>">
                        <span class="invalid-feedback"><?php echo $error_npm; ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-8">
                        <input type="text" name="tempat_lahir" class="form-control <?php echo ($error_tempat_lahir != "" ? "is-invalid" : ""); ?>" id="tempat_lahir" placeholder="Masukkan Tempat Lahir" value="<?php echo $tempat_lahir; ?>">
                        <span class="invalid-feedback"><?php echo $error_tempat_lahir; ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggal_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-8">
                        <input type="date" name="tanggal_lahir" class="form-control <?php echo ($error_tanggal_lahir != "" ? "is-invalid" : ""); ?>" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>">
                        <span class="invalid-feedback"><?php echo $error_tanggal_lahir; ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-4 col-form-label">Program Studi</label>
                    <div class="col-sm-8">
                        <input type="text" name="program_studi" class="form-control <?php echo ($error_program_studi != "" ? "is-invalid" : ""); ?>" id="program_studi" placeholder="Masukkan Program Studi" value="<?php echo $program_studi; ?>">
                        <span class="invalid-feedback"><?php echo $error_program_studi; ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                        <input type="text" name="alamat" class="form-control <?php echo ($error_alamat != "" ? "is-invalid" : ""); ?>" id="alamat" placeholder="Masukkan Alamat" value="<?php echo $alamat; ?>">
                        <span class="invalid-feedback"><?php echo $error_alamat; ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" name="email" class="form-control <?php echo ($error_email != "" ? "is-invalid" : ""); ?>" id="email" placeholder="Masukkan Email" value="<?php echo $email; ?>">
                        <span class="invalid-feedback"><?php echo $error_email; ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <input class="btn btn-primary" type="submit" name="submit" value="Register">
                    </div>
                </div>
            </fieldset>
        </form>
        <!-- Buat validasi form login, jika username dan password salah maka tampilkan warning -->
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>

</html>