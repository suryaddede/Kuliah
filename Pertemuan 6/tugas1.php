<?php
if (isset($_POST["submit"])) {
    if (empty($_POST["email"]) || empty($_POST["password"])) {
        header("Location: tugas2_error.php");
        exit();
    } else {
        $email = $_POST["email"];
        header("Location: tugas1_sukses.php?email=$email");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        .container {
            height: 100vh;
            width: 40vw;
        }
    </style>
</head>

<body class="container d-flex align-items-center bg-dark text-light">
    <div class="row justify-content-center card border-light bg-dark w-100">
        <div class="col-12 bg-dark border-light text-center card-header">
            <h1>Login</h1>
        </div>
        <div class="card-body px-5">
            <form action="tugas1.php" method="post">
                <div class="form-group">
                    <label for="email" class="font-weight-bold card-text">Email</label>
                    <input type="text" class="form-control" name="email" id="email" require>
                </div>
                <div class="form-group">
                    <label for="password" class="font-weight-bold card-text">Password</label>
                    <input type="password" class="form-control" name="password" id="password" require minlength="8">
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-primary w-25" name="submit" value="Login">
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>