<?php

class City {
    public $name;
    public $population;

    public function setDetails($name, $population) {
        $this->name = $name;
        $this->population = $population;
    }

    public function displayDetils() {
        return "The city of ".$this->name." has a population of ".$this->population." people.";
    }
}

// Start the session to keep track of the items across page loads
session_start();

// Initialize the array to hold items if not already set
if (!isset($_SESSION['items'])) {
    $_SESSION['items'] = [];
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture the form data
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $population = isset($_POST['population']) ? htmlspecialchars($_POST['population']) : '';

    // Store the new item as an array and add to the session
    if ($name && $population) {
        $city = new City();
        $city->setDetails($name, $population);
        $_SESSION['items'][] = $city;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Form Example</title>
    <style>
        .item-container {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <form method="post" action="">
        City Name: <input type="text" name="name" required><br>
        Population: <input type="number" name="population" required><br>
        <input type="submit" value="Add City">
    </form>
    

    <!-- Display the items in separate divs -->
    <?php
    if (!empty($_SESSION['items'])) {
        foreach ($_SESSION['items'] as $index => $item) {
            echo "<div class='item-container'>";
            echo "<p>".$item->displayDetils()."</p>";
            echo "</div>";
        }
    }
    ?>

</body>
</html>