
<?php

require('config/database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $verification_code = rand(100000, 999999);
    $sql = "INSERT INTO users_tmp VALUES ('$email', '$password', $verification_code)";

    $_POST['verification_code'] = $verification_code;
    $conn->close();
}
?>


<form method="POST" action="redirect.php">
    <label for="otp">Enter OTP:</label>
    <input type="text" id="otp" name="otp" required>
    <button type="submit">Verify OTP</button>
</form>