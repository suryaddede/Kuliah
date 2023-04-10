<?php
if (isset($_COOKIE["variable_cookies"])) {
    echo "Variable cookiesnya \"\$variable_cookies\" nilainya adalah " . $_COOKIE["variable_cookies"];
} else {
    echo "Variable cookies belum diterapkan";
}
