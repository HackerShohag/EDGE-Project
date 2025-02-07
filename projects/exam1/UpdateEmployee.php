<?php
include("dbconnect.php");
$currentEmployeeID = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    include("navbar.php");
    ?>
    <div class="container mt-5">
        <h2>Update Employee</h2>
        <form id="addEmployeeForm" method="POST" action="">
            <?php
            $result = mysqli_query($conn, "SELECT * FROM `Employees` WHERE id = " . $currentEmployeeID);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                    echo '<label>Employee ID:</label>';
                    echo '<input type="text" name="employeeID" value="' . $row['id'] . '" class="form-control">';

                    echo '<label>Name:</label>';
                    echo '<input type="text" id="employeeName" name="employeeName" value="' . $row['name'] . '" class="form-control">';

                    echo '<label>Position:</label>';
                    echo '<input type="text" id="employeePosition" name="employeePosition" value="' . $row['position'] . '" class="form-control">';

                    echo '<label>Salary:</label>';
                    echo '<input type="number" id="employeeSalary" name="employeeSalary" value="' . $row['salary'] . '" class="form-control">';

                    echo '<label>Status:</label>';
                    echo '<select class="form-select" id="employeeStatus" name="employeeStatus">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>';
                    echo '<button class="btn btn-primary mt-3">Update Employee</button>';
                }
            }
            ?>
        </form>
    </div>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['employeeID'];
    $name = $_POST['employeeName'];
    $position = $_POST['employeePosition'];
    $salary = $_POST['employeeSalary'];
    $status = $_POST['employeeStatus'];

    $sql = "UPDATE Employees SET id='$id', name = '$name', position = '$position', salary = '$salary', status = '$status' WHERE id = $currentEmployeeID";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Employee updated successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>