<?php
echo "Using FOR loop: <br>";
for ($i = 1; $i <= 10; $i++) {
    echo "The square of $i is " . ($i * $i) . "<br>";
    echo("<br>");
}
echo("<br>");
echo "Using WHILE loop:<br>";
$i = 1;
while ($i <= 10) {
    echo "The square of $i is " . ($i * $i) . "<br>";
    $i++;
    echo("<br>");
}
echo("<br>");
echo "Using DO-WHILE loop:<br>";
$i = 1;
do {
    echo "The square of $i is " . ($i * $i) . "<br>";
    $i++;
    echo("<br>");
} while ($i <= 10);

print("<br>");
echo "Using FOREACH loop:<br>";
$numbers = array(1, 3, 5, 7, 9, 11);
foreach ($numbers as $num) {
    echo "The square of $num is " . ($num * $num) . "<br>";
    print("<br>");
}
print("<br>");
for ($i = 1; $i <= 10; $i++) {
    if ($i == 6) {
        echo "Breaking the loop at $i.<br>";
        break;
    }
    echo "Number: $i<br>";
}
print("<br>");
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    echo "Odd Number: $i<br>";
}
print("<br>");
print("<br>");
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

function generatePrimeNumbers($start, $end) {
    $primes = [];
    
    for ($num = $start; $num <= $end; $num++) {
        if (isPrime($num)) {
            $primes[] = $num;
        }
    }

    return $primes;
}

$primeNumbers = generatePrimeNumbers(1, 1000);
echo "Prime numbers between 1 and 1000: <br>";
echo implode(", ", $primeNumbers) . "<br>";

?>
