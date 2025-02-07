<?php

$address = "RUET, Rajshahi-6204";
echo "The Address is: ".$address;
echo "<br>";
$len  = strlen($address);
echo "Length of string: ".$len;
echo "<br>";
// Word count
echo "Total words: ".str_word_count($address). "<br>";
echo "Reverse of Address: ".strrev($address)."<br>";

echo "Position of Rajshahi: ".strpos($address, "Rajbari");
echo "<br>";
$new_address = str_replace("RUET","CSE", $address);
echo "New Address: ".$new_address;
echo str_repeat($address, 5)."<br>";







?>