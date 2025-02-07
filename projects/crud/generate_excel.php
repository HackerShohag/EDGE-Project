<?php
require_once 'config/database.php';

// Set headers to download the file as an Excel file
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=users_report.xls");
header("Pragma: no-cache");
header("Expires: 0");

// Fetch users from the database
$query = "SELECT * FROM users ORDER BY created_at DESC";
$result = $conn->query($query);

// Start output buffering for the Excel file
echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Email</th>";
echo "<th>Created At</th>";
echo "</tr>";

// Write data rows
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
    echo "<td>" . htmlspecialchars($row['name']) . "</td>";
    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
    echo "<td>" . htmlspecialchars($row['created_at']) . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
