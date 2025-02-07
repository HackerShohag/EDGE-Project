<?php
require_once 'config/database.php';

if (isset($_GET['id'])) {
    $id = $conn->real_escape_string($_GET['id']);
    $query = "DELETE FROM users WHERE id = $id";

    if ($conn->query($query)) {
        echo "User deleted successfully.";
    } else {
        echo "Failed to delete user: " . $conn->error;
    }
} else {
    echo "Invalid user ID.";
}

header('Location: index.php');
exit;
?>
