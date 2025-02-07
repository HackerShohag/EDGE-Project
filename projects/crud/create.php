<?php
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);

    if ($name && $email) {
        $query = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
        if ($conn->query($query)) {
            echo "User added successfully.";
        } else {
            echo "Failed to add user: " . $conn->error;
        }
    } else {
        echo "All fields are required.";
    }
}
?>

<form method="POST" action="">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <button type="submit">Add User</button>
</form>
