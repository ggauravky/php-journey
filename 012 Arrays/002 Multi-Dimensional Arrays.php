<?php

// echo "normal arrays <br><br>";

// $arr=array("this", "is", "an", "array");
// echo var_dump($arr);
// echo "<br>";
// print_r($arr);

echo "<h1>Multi-Dimensional Arrays</h1>";

$multiArray = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

echo "<p>Multi-Dimensional Array:</p>";
echo "<pre>";
print_r($multiArray);
echo "</pre>";

echo "<p>Accessing elements:</p>";
echo "Element at [0][0]: " . $multiArray[0][0] . "<br>";
echo "Element at [1][1]: " . $multiArray[1][1] . "<br>";
echo "<br>";

for ($i = 0; $i < count($multiArray); $i++) {
    for ($j = 0; $j < count($multiArray[$i]); $j++) {
        echo "Element at [$i][$j]: " . $multiArray[$i][$j] . "<br>";
    }
}

?>
