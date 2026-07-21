<?php

echo "Loops in PHP are used to execute a block of code repeatedly as long as a specified condition is true. There are several types of loops in PHP, including for, while, do-while, and foreach loops. Each type of loop has its own syntax and use cases. <br>";

echo "<br>";

//for loop example
for ($i = 0; $i < 5; $i++) {
    echo "The value of i is: $i <br>";
}

echo "<br>";

for ($j = 5; $j > 0; $j--) {
    echo "The value of j is: $j <br>";
}

echo "<br>";

//while loop example
$k = 0;
while ($k < 5) {
    echo "The value of k is: $k <br>";
    $k++;
}

//another example of while loop
$l = 5;
while ($l > 0) {
    echo "The value of l is: $l <br>";
    $l--;
}


?>
