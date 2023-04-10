<?php
if (empty($_POST['nama'])) {
    header("Location:8contoh_redirect3.php");
} else {
    echo "<center>Nama :" . $_POST['nama'] . "</b></center><br>";
}
?>