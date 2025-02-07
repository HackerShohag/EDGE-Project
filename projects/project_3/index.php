<?php

function displaySection($title, $file) {
    echo "<div style='border: 1px solid black; margin: 10px; padding:10px;'><h2>$title</h2> <br />";
    echo "<p>";
    require_once $file;
    echo "</p>";
    echo '<br></div>';
}

echo "<h1>PHP OOP (class 3)</h1>";
// displaySection('Abstract Class in PHP', 'abstract_class.php');
displaySection('Exception Handling in PHP','exception_handling.php');
displaySection('Interfaces in PHP','interfaces.php');
displaySection('Multi-lever Inheritance in PHP','Multilever_Inheritance.php');
displaySection('Multiple Inheritance in PHP','multiple_inheritance.php');
displaySection('Polymorphism in PHP','polymorphisom.php');

?>