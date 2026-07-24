<?php

echo"Welcome to PHP Functions!";

function myFunction() {
    echo "This is a user-defined function.";
}

myFunction();

function addNumbers($a, $b) {
    return $a + $b;
}

echo "<br>";
echo addNumbers(5, 10);

function processMarks($marks) {
    if ($marks >= 90) {
        return "A";
    } elseif ($marks >= 80) {
        return "B";
    } elseif ($marks >= 70) {
        return "C";
    } elseif ($marks >= 60) {
        return "D";
    } else {
        return "F";
    }
}
$marks = 85;
$grade = processMarks($marks);
echo "<br>";
echo "Grade: " . $grade;
?>
