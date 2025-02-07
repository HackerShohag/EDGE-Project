<?php
if (isset($_COOKIE['token'])) {
    $user = $_COOKIE['user'];
} else {
    header('location: Login.php');
    exit;
}
?>