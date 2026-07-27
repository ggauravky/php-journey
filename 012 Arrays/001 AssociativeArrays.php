<?php


echo "Arrays in PHP <br><br>";

$arr=array("this", "is", "an", "array");
echo "Array elements are: <br>";
echo $arr[0]."<br>";
echo $arr[1]."<br>";
echo $arr[2]."<br>";
echo $arr[3]."<br>";
echo "<br>";

//Associative arrays

$favCol=array(
    "John"=>"blue", 
    "Mary"=>"green", 
    "Peter"=>"red",
    9=>"yellow"
    );

echo $favCol["John"]."<br>";
echo $favCol["Mary"]."<br>";
echo $favCol["Peter"]."<br>";
echo $favCol[9]."<br>";

foreach($favCol as $key=>$value){
    echo "Key: ".$key." Value: ".$value."<br>";
}

?>
