<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <form action="if-else.php" method="post">
        <label for="marks">Enter your marks:</label>
        <input type="number" id="marks" name="marks" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the marks from user input
    $marks = $_POST['marks'];

    // Validate the input
    if (!is_numeric($marks) || $marks < 0 || $marks > 100) {
        echo "Please enter a valid mark between 0 and 100.";
    } 
    else {
        // Apply if-else conditions to assign grades
        if ($marks >= 80) 
        {
            $grade = "A+";
        } 

        elseif ($marks >= 70 and $marks<=79) 
        {
            $grade = "A";
        } 
        elseif ($marks >= 60 and $marks<=69)
         {
            $grade = "B";
        } 

        elseif ($marks >= 50 and $marks<=59) 
        {
            $grade = "C";
        } 

        elseif ($marks >= 40 and $marks<=49) 
        {
            $grade = "D";
        } 

        else 
        {
            $grade = "F";
        }

        // Output the result
        echo "Your marks: $marks <br>";
        echo "Your grade: $grade";
    }
}


?>
