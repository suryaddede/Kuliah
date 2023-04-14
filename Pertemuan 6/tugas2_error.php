<?php
$message = "Mohon maaf, data yang Anda masukkan tidak lengkap. Silakan kembali ke <a href=\"tugas1.php\">halaman login</a> dan lengkapi data Anda.";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login gagal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
    .container {
            height: 95vh;
            width: 70vw;
        }
    </style>
</head>

<body class="container d-flex align-items-center bg-dark text-light">
    <div class="row w-100">
        <div class="col-12 bg-dark text-center mb-3">
            <h1>Login gagal:(</h1>
        </div>
        <div class="col-6 offset-3 text-center">
            <?php
            echo $message;
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>