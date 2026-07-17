<?php

$name = "Gaurav";

echo $name;
echo "<br>";

echo "the length of " . " the string is: " . strlen($name); // returns the length of a string
echo "<br>";

echo "the string in uppercase is: " . strtoupper($name); // converts a string to uppercase
echo "<br>";

echo "the string in lowercase is: " . strtolower($name); // converts a string to lowercase
echo "<br>";

echo "the string in title case is: " . ucwords($name); // converts the first character of each word to uppercase
echo "<br>";

echo "the string in reverse is: " . strrev($name); // reverses a string
echo "<br>";

echo strpos($name, "G"); // returns the position of the first occurrence of a substring in a string
echo "<br>";

echo str_replace("Gaurav", "Gaurav Kumar", $name); // replaces all occurrences of the search string with the replacement string
echo "<br>";

echo str_word_count($name); // counts the number of words in a string
echo "<br>";

echo str_repeat($name, 3); // repeats a string a specified number of times
echo "<br>";

echo "<pre>";
echo rtrim("   Gaurav   "); // removes whitespace or other characters from the right side of a string
echo "<br>";

echo ltrim("   Gaurav   "); // removes whitespace or other characters from the left side of a string
echo "<br>";

echo trim("   Gaurav   "); // removes whitespace or other characters from both sides of a string
echo "<br>";
echo "</pre>";

echo "the string in title case is: " . ucfirst($name); // converts the first character of a string to uppercase
echo "<br>";

echo "the string in lowercase is: " . lcfirst($name); // converts the first character of a string to lowercase
echo "<br>";

?>
