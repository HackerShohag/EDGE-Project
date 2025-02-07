<?php

	/* PHP Data Types
	1. String: SIngle/Double Quatation
	2. Number (Int, Float)
	3. Boolean
	4. Array
	5. Object(OOP)
	6. NULL
	*/

// String: 
$Name = 'Khan';
$Address = 'Rajshahi, 6504, Bangladesh';
echo "$Name is from $Address";

//Integer
$Age  = 45;
echo "<br> He is now early $Age";

//Float: Fractional
$Salary = 46532.23;
$reduction = 0.01;
echo "<br> His gross salary is: ".($Salary-$Salary*$reduction)."<br>";

//Boolean
$var1  = true;
$vae2 = false;
$is_ok = false;
echo "<br>".var_dump($is_ok);

//Array
$country_list = array("USA","UK", "Germany", "France", "Italy");

echo "$country_list[0], $country_list[2]";
echo "<br>";
print_r($country_list) ;
echo "<br>";
echo implode(", ", $country_list);
echo "<br>";
echo var_dump($Salary, $Age);



?>