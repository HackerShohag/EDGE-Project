<?php

function displaySection($title, $file) {
    echo "<div style='border: 1px solid black; margin: 10px; padding:10px;'><h2>$title</h2> <br />";
    echo "<p>";
    require_once $file;
    echo "</p>";
    echo '<br></div>';
}

echo "<h1>PHP OOP (class 3)</h1>";
displaySection('Class and object in PHP', 'class_object.php');
displaySection('Encapsulation in PHP','encapsulation_2.php');
displaySection('Inheritance in PHP','inheritance_3.php');
displaySection('Constructor in PHP','constructor_4.php');
displaySection('Inheritance & Constructor in PHP','combined_inheritance_constructor.php');

?>