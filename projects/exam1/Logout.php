<?php
if (isset($_COOKIE['token'])) {
    setcookie('token', '', time() - 3600, '/');
    header('location: Login.php');
    exit;
} else {
    header('location: Login.php');
    exit;
}
?>