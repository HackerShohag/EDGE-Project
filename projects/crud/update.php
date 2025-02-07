<?php
require_once 'config/database.php';

if (isset($_GET['id'])) {
    $id = $conn->real_escape_string($_GET['id']);
    $query = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($query);
    $user = $result->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $conn->real_escape_string($_POST['name']);
        $email = $conn->real_escape_string($_POST['email']);

        $query = "UPDATE users SET name = '$name', email = '$email' WHERE id = $id";
        if ($conn->query($query)) {
            echo "User updated successfully.";
        } else {
            echo "Failed to update user: " . $conn->error;
        }
    }
} else {
    echo "Invalid user ID.";
}
?>

<form method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?= $user['name']; ?>" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?= $user['email']; ?>" required><br><br>

    <button type="submit">Update User</button>
</form>
