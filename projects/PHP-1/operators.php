<?php
/* Opeators in PHP:
1. Arithmetic
2. Assignment
3. Comparison
4. Logical
*/

//Arithmetic
$var1 = 5;
$var2 = 14;
echo $var1 + $var2;
echo "Var1 + Var2: ".($var1+$var2)."<br>";
echo "Var1 - Var2: ".($var1-$var2)."<br>";
echo "Var1 * Var2: ".($var1*$var2)."<br>";
echo "Var2 / Var1: ".($var2/$var1)."<br>";
echo "Var2 % Var1: ".($var2%$var1)."<br>";
echo "Var1**Var2: ".($var1**$var2)."<br>";

//Assignment.
$salary = 65000.0;
$salary+=500;
echo "New salary: ".$salary."<br>";
//Post Increament
$i = 5;
echo $i++."<br>"; 
echo $i."<br>"; 
//Pre Increament
$j = 5;
echo ++$j."<br>"; 
echo $j;   
// Task: -=,*=,/=,%=.

//Comparative...
$a=10;
$b=11;
echo "<br>";
echo "a==b? :".var_dump($a==$b). "<br>";
echo "a!=b? :".($a!=$b)."<br>";
echo "a>b? :".($a>$b)."<br>";
echo "a>=b? :".($a>=$b)."<br>";
echo "a<b? :".($a<$b)."<br>";
echo "a<=b? :".($a<=$b)."<br>";

// Logical Opeations
$A = true;
$B = false;
echo "<br> A and B: ".($A and $B);
echo "<br> A and B: ".($A && $B);
echo "<br> A or B: ".($A or $B);
echo "<br> A or B: ".($A || $B);
echo "<br> A xor B: ".($A xor $B);
?>