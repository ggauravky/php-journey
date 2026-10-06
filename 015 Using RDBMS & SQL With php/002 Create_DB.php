<?php

echo"connecting to the database...";
echo"<br>";

$servername = "localhost";
$username = "root";
$password = "";

//Create a connection
$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}else{
    echo"connection successful";
}

echo"<br>";
$sql="CREATE DATABASE college";
$res=mysqli_query($conn ,$sql);
// echo "the result:"; 
// echo var_dump($res);
//die if connection was not successful


//check for the database 
if($res){
    echo"the database was created successfully";
}else{
    echo"the database was not created successfully because of this error ---> ".mysqli_error($conn);
}

?>