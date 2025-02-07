<?php


$fruits = ["Apple", "Banana", "Orange", "Grapes", "Pineapple"];

echo "Indexed Array:<br>";
for ($i = 0; $i < count($fruits); $i++) 
{
    echo "Fruit $i: " . $fruits[$i] . "<br>"; 
}
print("<br>");
echo "Using foreach loop for Indexed Array:<br>";
foreach ($fruits as $fruit) 
{
    echo "Fruit: $fruit<br>"; 
}
print("<br>");

$person = [
    "name" => "John",
    "age" => 30,
    "city" => "Dhaka",
    "job" => "Software Engineer"
];

print("<br>");
echo "Associative Array:<br>";
foreach ($person as $key => $value) {
    echo "$key: $value<br>"; 
}
print("<br>");

$employees = [
    ["name" => "AAA", "position" => "Manager", "salary" => 500000],
    ["name" => "BBB", "position" => "Developer", "salary" => 400000],
    ["name" => "CCC", "position" => "Designer", "salary" => 350000]
];
print("<br>");
echo "Multidimensional Array:<br>";
foreach ($employees as $employee) {
    echo "Name: " . $employee["name"] . ", Position: " . $employee["position"] . ", Salary: $" . $employee["salary"] . "<br>"; // Loop through multidimensional array using foreach
}

print("<br>");

echo "Using while loop for Indexed Array:<br>";
$i = 0;
while ($i < count($fruits)) {
    echo "Fruit: " . $fruits[$i] . "<br>";
    $i++;
}

?>
