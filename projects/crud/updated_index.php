<?php
require_once 'config/database.php';

$query = "SELECT * FROM users ORDER BY created_at DESC";
$result = $conn->query($query);
?>

<h2>User List</h2>
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php while ($user = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $user['id']; ?></td>
        <td><?= $user['name']; ?></td>
        <td><?= $user['email']; ?></td>
        <td>
            <a href="update.php?id=<?= $user['id']; ?>">Edit</a> |
            <a href="delete.php?id=<?= $user['id']; ?>">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
<a href="create.php">Add New User</a>
<a href="generate_pdf.php" target="_blank">Download PDF Report</a>
<a href="generate_excel.php" target="_blank">Download Excel Report</a>


