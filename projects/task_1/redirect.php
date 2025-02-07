<?php

require('config/database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $otp = $_POST['otp'];
    $verification_code = $_POST['verification_code'];

    echo $otp.'<br>'.$verification_code.'';

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if ($otp != $verification_code) {
        echo "Invalid OTP";
    } else {
        $sql = "INSERT INTO users (email, password) SELECT email, password FROM users_tmp WHERE otp = '$otp'";
        if ($conn->query($sql) === TRUE) {
            $delete_sql = "DELETE FROM users_tmp WHERE otp = '$otp'";
            if ($conn->query($delete_sql) === TRUE) {
                echo "New record created successfully and temporary data removed";
            } else {
                echo "Error deleting temporary data: " . $conn->error;
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        header("Location: reg.php");
    }

    $conn->close();

    exit();
}
?>