<?php

$age = 20;
switch ($age) {
    case 18:
        echo "You are 18 years old.";
        break;
    case 20:
        echo "You are 20 years old.";
        break;
    case 25:
        echo "You are 25 years old.";
        break;
    default:
        echo "Age not specified.";
}

//another example

$day = "Monday";
switch ($day) {
    case "Monday":
        echo "Today is Monday.";
        break;
    case "Tuesday":
        echo "Today is Tuesday.";
        break;
    case "Wednesday":
        echo "Today is Wednesday.";
        break;
    default:
        echo "It's not Monday, Tuesday, or Wednesday.";
}

//another example

$fruit = "Apple";
switch ($fruit) {
    case "Apple":
        echo "You have an Apple.";
        break;
    case "Banana":
        echo "You have a Banana.";
        break;
    case "Orange":
        echo "You have an Orange.";
        break;
    default:
        echo "Fruit not recognized.";
}


?>
