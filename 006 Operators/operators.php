<?php

/*

Operators are symbols used to perform
operations on variables and values.

Types of Operators:
1. Arithmetic Operators
2. Assignment Operators
3. Comparison Operators
4. Logical Operators
5. Increment / Decrement Operators

=====================================
*/

$a = 10;
$b = 20;


// =====================================
// 1. Arithmetic Operators
// Used to perform mathematical operations.
// =====================================

echo "<h3>1. Arithmetic Operators</h3>";

echo "Addition (+) = " . ($a + $b);
echo "<br>";

echo "Subtraction (-) = " . ($a - $b);
echo "<br>";

echo "Multiplication (*) = " . ($a * $b);
echo "<br>";

echo "Division (/) = " . ($a / $b);
echo "<br>";

echo "Modulus (%) = " . ($a % $b);
echo "<br>";

echo "Exponentiation (**) = " . ($a ** 2);
echo "<br><hr>";


// =====================================
// 2. Assignment Operators
// Used to assign values to variables.
// =====================================

echo "<h3>2. Assignment Operators</h3>";

$c = $a;
echo "c = $c <br>";

$c += 5;
echo "c += 5 : $c <br>";

$c -= 2;
echo "c -= 2 : $c <br>";

$c *= 2;
echo "c *= 2 : $c <br>";

$c /= 2;
echo "c /= 2 : $c <br>";

$c %= 3;
echo "c %= 3 : $c <br>";

echo "<hr>";


// =====================================
// 3. Comparison Operators
// Used to compare two values.
// Output is bool(true) or bool(false).
// =====================================

echo "<h3>3. Comparison Operators</h3>";

echo "a == b : ";
var_dump($a == $b);
echo "<br>";

echo "a != b : ";
var_dump($a != $b);
echo "<br>";

echo "a > b : ";
var_dump($a > $b);
echo "<br>";

echo "a < b : ";
var_dump($a < $b);
echo "<br>";

echo "a >= b : ";
var_dump($a >= $b);
echo "<br>";

echo "a <= b : ";
var_dump($a <= $b);
echo "<br>";

echo "a === b : ";
var_dump($a === $b);
echo "<br>";

echo "a !== b : ";
var_dump($a !== $b);
echo "<br><hr>";


// =====================================
// 4. Logical Operators
// Used to combine conditions.
// =====================================

echo "<h3>4. Logical Operators</h3>";

echo "a && b : ";
var_dump($a && $b);
echo "<br>";

echo "a || b : ";
var_dump($a || $b);
echo "<br>";

echo "!a : ";
var_dump(!$a);
echo "<br>";

echo "a xor b : ";
var_dump($a xor $b);
echo "<br><hr>";


// =====================================
// 5. Increment / Decrement Operators
// Used to increase or decrease value by 1.
// =====================================

echo "<h3>5. Increment / Decrement Operators</h3>";

$x = 5;

echo "Original Value = $x <br>";

echo "Post Increment (x++) = " . $x++;
echo "<br>";

echo "Current Value = $x <br>";

echo "Pre Increment (++x) = " . ++$x;
echo "<br>";

echo "Post Decrement (x--) = " . $x--;
echo "<br>";

echo "Current Value = $x <br>";

echo "Pre Decrement (--x) = " . --$x;
echo "<br><hr>";



?>