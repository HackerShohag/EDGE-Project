<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<?php 
    include("navbar.php");
    ?>
    <div class="container mt-5">
        <h2>Add Employee</h2>
        <form id="addEmployeeForm" method="POST" action="">
            <div class="mb-3">
                <label for="employeeName" class="form-label">Employee Name</label>
                <input type="text" class="form-control" id="employeeName" name="employeeName" placeholder="Enter employee name" required>
            </div>
            <div class="mb-3">
                <label for="employeePosition" class="form-label">Position</label>
                <input type="text" class="form-control" id="employeePosition" name="employeePosition" placeholder="Enter position" required>
            </div>
            <div class="mb-3">
                <label for="employeeSalary" class="form-label">Salary</label>
                <input type="number" class="form-control" id="employeeSalary" name="employeeSalary" placeholder="Enter salary" required>
            </div>
            <div class="mb-3">
                <label for="employeeStatus" class="form-label">Status</label>
                <select class="form-select" id="employeeStatus" name="employeeStatus">
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Add Employee</button>
        </form>
    </div>
</body>

</html>

<?php
include 'dbconnect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['employeeName'];
    $position = $_POST['employeePosition'];
    $salary = $_POST['employeeSalary'];
    $status = $_POST['employeeStatus'];

    $sql = "INSERT INTO Employees (name, position, salary, status) VALUES ('$name', '$position', '$salary', '$status')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('New employee added successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>