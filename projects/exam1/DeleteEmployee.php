<?php
include("session_checking.php");
include("dbconnect.php");
$currentEmployeeID = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['employeeID'];

    $checkSql = "SELECT * FROM Employees WHERE id = $id";
    $result = mysqli_query($conn, $checkSql);

    if (mysqli_num_rows($result) == 0) {
        echo "<script>alert('Employee does not exist');</script>";
        mysqli_close($conn);
        exit();
    }

    // Removed confirmation script as it is handled in the form submission

    $sql = "DELETE FROM Employees WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Employee deleted successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Delete Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    include("navbar.php");
    ?>
    <div class="container mt-5">
        <h2>Delete Employee</h2>
        <form id="deleteEmployeeForm" method="POST" action=""
            onsubmit="return confirm('Are you sure you want to delete this employee?');">
            <label>Employee ID:</label>
            <input type="text" id="employeeID" name="employeeID" class="form-control">
            <button class="btn btn-danger mt-3">Delete Employee</button>
        </form>
    </div>
</body>

</html>