<html>

<head>
    <title>Lupa Password</title>
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
$username = $email = "";
$error_username = $error_email = "";
?>

<body class="bg-dark text-light">
    <h1 class="text-center py-5">Sistem Informasi Akademik Fasilkom UPN Jatim</h1>
    <div class="container">
        <legend>
            <h6 class="text-center mb-5">Silahkan masukkan username dan email yang terdaftar</h6>
        </legend>
        <form method="post" action="reset.php">
            <fieldset id="fieldset1" style="display:block">
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" name="username" class="form-control <?php echo ($error_username != "" ? "is-invalid" : ""); ?>" id="username" placeholder="Masukkan Username" value="<?php echo $username; ?>">
                        <span class="invalid-feedback"><?php echo $error_username; ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control <?php echo ($error_email != "" ? "is-invalid" : ""); ?>" id="email" placeholder="Masukkan Email" value="<?php echo $email; ?>">
                        <span class="invalid-feedback"><?php echo $error_email; ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <input class="btn btn-primary" type="submit" name="submit" value="Kirim">
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>

</html>