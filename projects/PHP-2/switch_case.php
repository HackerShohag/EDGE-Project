<?php

$day = date("l"); // Gets the current day of the week (e.g., "Monday")
echo "Today is ". $day.".<br>";
switch ($day) {
    case "Monday":
        echo "Start of the work week! Let's make it productive.";
        break;
    case "Tuesday":
        echo "It's Tuesday! Keep up the momentum.";
        break;
    case "Wednesday":
        echo "Midweek already! You're doing great.";
        break;
    case "Thursday":
        echo "Almost there! It's Thursday.";
        break;
    case "Friday":
        echo "Happy Friday! The weekend is near.";
        break;
    case "Saturday":
        echo "It's the weekend! Time to relax and recharge.";
        break;
    case "Sunday":
        echo "Enjoy your Sunday! Get ready for the week ahead.";
        break;
    default:
        echo "Invalid day! Something went wrong.";
}

/*
Common Variations with date()
Here are some other useful format specifiers:
"D": Short day name (e.g., "Wed").
"F": Full month name (e.g., "November").
"Y": Year in 4 digits (e.g., "2024").
"m": Month as a number (e.g., "11").
"d": Day of the month as a number (e.g., "27").
*/

?>
