<?php
// Database configuration
$host = "localhost";
$db_name = "EDGERUETCSEB06";
$username = "root"; // Default MySQL username
$password = ""; // Default MySQL password

// Create connection
$conn = new mysqli($host, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
