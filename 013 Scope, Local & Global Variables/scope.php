<?
echo"this is a test";
function test($variable){
    $a=45;
   echo $variable;
   echo $a;
}
$a=40;
$variable = "this is a test";
test($variable);
echo $a;

// o/p:
// 40
// this is a testthis is a test
// 45


// another example of local and global variable

$a=10;
function test1(){
    global $a;
    echo $a;
}
test1();
echo $a;
//o/p:
// 10
// 10

?>