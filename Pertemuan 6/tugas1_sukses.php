<?php
$message = "Anda berhasil login dengan akun " . $_GET["email"] . " pada hari " . gmdate("l") . ", tanggal " . gmdate("d F Y") . ", pukul " . gmdate("H:i:s e.");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login sukses</title>
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
            <h1>Selamat datang, Surya:)</h1>
        </div>
        <div class="col-6 offset-3 text-center">
            <?php
            echo $message;
            ?>
        </div>
        <div class="bg-dark col-12 text-center mt-3">
            <h3>Anda akan dialihkan ke halaman utama dalam <span id="countdown">10</span> detik.</h3>
        </div>
    </div>

    <script>
        var timeLeft = 10;
        var countdownTimer = setInterval(function() {
            timeLeft--;
            document.getElementById("countdown").textContent = timeLeft;
            if (timeLeft == 0) {
                clearInterval(countdownTimer);
                window.location.href = "tugas3.php";
            }
        }, 1000);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>