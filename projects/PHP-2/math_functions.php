<?php 
// 1. Absolute Value
echo "abs() <br>";
echo abs(-10) . "<br>"; 
echo abs(5.5) . "<br>"; 
print("<br>");
// 2. Ceiling
echo "2. ceil():<br>";
echo ceil(4.3) . "<br>"; 
echo ceil(-4.3) . "<br>"; 
print("<br>");
// 3. Floor
echo "3. floor():<br>";
echo floor(4.7) . "<br>"; 
echo floor(-4.7) . "<br>"; 
print("<br>");
// 4. Rounding
echo "4. round():<br>";
echo round(4.5) . "<br>"; 
echo round(4.4) . "<br>"; 
echo round(4.567, 2) . "<br>"; 
print("<br>");
// 5. Power
echo "5. pow():<br>";
echo pow(2, 3) . "<br>"; 
echo pow(5, 2) . "<br><br>"; 
print("<br>");
// 6. Square Root
echo "6. sqrt():<br>";
echo sqrt(16) . "<br>"; 
echo sqrt(20) . "<br><br>";
print("<br>");
// 7. Maximum Value
echo "7. max():<br>";
echo max(1, 3, 7, 2) . "<br>"; 
echo max([1, 5, 9]) . "<br><br>"; 
print("<br>");
// 8. Minimum Value
echo "8. min():<br>";
echo min(1, 3, 7, 2) . "<br>"; 
echo min([1, 5, 9]) . "<br><br>"; 
print("<br>");
// 9. Random Numbers
echo "9. rand():<br>";
echo rand() . "<br>"; 
echo rand(10, 50) . "<br><br>"; 
print("<br>");
// 10. Better Random Numbers
echo "10. mt_rand():<br>";
echo mt_rand() . "<br>"; 
echo mt_rand(100, 200) . "<br><br>"; 
print("<br>");
// 11. Value of Pi
echo "11. pi():<br>";
echo pi() . "<br>"; 
echo pi() * pow(5, 2) . "<br><br>"; 
print("<br>");
// 12. Degrees to Radians and Vice Versa
echo "12. deg2rad() and rad2deg():<br>";
echo deg2rad(180) . "<br>"; 
echo rad2deg(pi()) . "<br>"; 
print("<br>");
// 13. Trigonometric Functions
echo "13. Trigonometric Functions:<br>";
echo sin(deg2rad(30)) . "<br>"; 
echo cos(deg2rad(60)) . "<br>"; 
echo tan(deg2rad(45)) . "<br>"; 
print("<br>");
// 14. Logarithmic Functions
echo "14. log() and log10():<br>";
echo log(2.7183) . "<br>"; 
echo log10(1000) . "<br>"; 
print("<br>");
// 15. Number Formatting
echo "15. number_format():<br>";
echo number_format(1234567.8910, 2) . "<br>"; 
print("<br>");
// Example Application: Area and Circumference of a Circle
$radius = 7;
$area = pi() * pow($radius, 2);
$circumference = 2 * pi() * $radius;
print("<br>");
echo "Example Application - Circle Calculations:<br>";
echo "Area: " . number_format($area, 2) . "<br>"; 
echo "Circumference: " . number_format($circumference, 2) . "<br>"; 
?>
