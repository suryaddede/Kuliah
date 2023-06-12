<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="stock/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<?php
$username = $password = "";
$error_username = $error_password = "";
?>

<body style="background-color: #444444;">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6" style="background-color: #333333;">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-light mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" method="post" action="autentikasi.php">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user <?php echo ($error_username != "" ? "is-invalid" : ""); ?>" name="username" id="username" aria-describedby="usernameHelp" placeholder="Username" value="<?php echo $username; ?>">
                                            <span class="invalid-feedback"><?php echo $error_username; ?></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user <?php echo ($error_password != "" ? "is-invalid" : ""); ?>" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>">
                                            <span class="invalid-feedback"><?php echo $error_password; ?></span>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="Login">
                                        <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="stock/assets/js/vendor/jquery.min.js"></script>
    <script src="stock/assets/js/bootstrap.min.js"></script>

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/42e7da2808.js" crossorigin="anonymous"></script>

    <!-- Core plugin JavaScript-->
    <script src="stock/assets/js/vendor/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="stock/assets/js/sb-admin-2.min.js"></script>

</body>

</html>