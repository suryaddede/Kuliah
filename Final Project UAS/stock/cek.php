<!-- cek apakah sudah login -->
<?php 
    session_start();
    if(!isset($_SESSION['username'])){
        header("location:../login.php?pesan=belum_login");
    }
?>