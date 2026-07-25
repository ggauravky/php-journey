<?php

echo "welcome to the date function page";
$d=date("Y/m/d");
echo "<br>";
echo "today's date is:".$d;

$day=date("l");
echo "<br>";
echo "today is:".$day;

$year=date("Y");
echo "<br>";
echo "this year is:".$year;
echo "<br>Copyright &copy; ".date("Y")." All rights reserved.";

$time=date("h:i:sa");
echo "<br>";
echo "current time is:".$time;

//mktime:
echo "<br>";
echo "mktime function:<br>";
$d=mktime(11,14,54,8,12,2014);
echo "the date is:".$d;

?>
