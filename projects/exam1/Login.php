<?php

if (isset($_COOKIE['token'])) {
    header('location: Dashboard.php');
}

include("dbconnect.php");

function getRandomStringRandomInt($length = 64)
{
    $stringSpace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $pieces = [];
    $max = mb_strlen($stringSpace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces[] = $stringSpace[random_int(0, $max)];
    }
    return implode('', $pieces);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $token = getRandomStringRandomInt();
            // setcookie('user', json_encode($row), time() + 3600, "/");
            setcookie('token', $token, time() + 3600, "/");
            header('Location: Dashboard.php');
            exit;
        }
    } else {
        echo '<script>alert("Invalid username or password")</script>';
        // echo "Invalid username or password";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

</html>

<head>
    <title>Delete Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Login</h2>
        <form id="loginForm" method="POST" action="">
            <div class="mb-3">
                <label for="username" class="form-label">User Email</label>
                <input type="text" class="form-control" id="username" name="username"
                    placeholder="Enter user email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="Enter position" required>
            </div>
            <button type="submit" class="btn btn-success">Login</button>
        </form>
    </div>
</body>