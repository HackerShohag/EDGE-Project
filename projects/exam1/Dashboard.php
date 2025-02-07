<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php 
    include("navbar.php");
    ?>
    <div class="container mt-5">
        <h2>Employee Dashboard</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Salary</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("dbconnect.php");

                $result = mysqli_query($conn, "SELECT * FROM `Employees` WHERE 1");

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' . $row["id"] . '</td>';
                        echo '<td>' . $row["name"] . '</td>';
                        echo '<td>' . $row["position"] . '</td>';
                        echo '<td>' . $row["salary"] . '</td>';
                        echo '<td>' . $row["status"] . '</td>';
                        echo '<td>
                    <a href="UpdateEmployee.php?id=' . $row["id"] . '" class="btn btn-warning btn-sm">Update</a>
                    <a href="DeleteEmployee.php" class="btn btn-danger btn-sm">Delete</a>
                  </td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="6">No employees found</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>