<?php
//Loops are used to execute the same block of code again and
// again, as long as a certain condition is true
//1. while-loops through a block of code as long as specified condition is true
//while(condition){//if true it loops
//    code to execute
//}
$x=0; //initializes the starting point of the loop
while($x<10){ //condition being tested
    echo $x."Hello world<br>";
    $x++; //increment value/operation
}
$x=0;
while($x<=20) {
    if ($x == 10) {
        echo $x . "The middle of the range<br>";
    }
    echo$x."<br>";
    $x++;

//2.do..while -Loops through a block of code once, and then repeats
// the loop as long as the specified condition is true
//do{
// code to execute
//}white(condition)
$y=0;
do{//echo 1st then check condition
    echo$y.'<br>';
    $y++;
}while($y<=5);//check condition later


//3.For-loops through a block of code a specified number of times
//foreach-loops through a block of code for each element in an array
//for (initial counter:test counter:increment counter){
//code to execute if condition is true
//}
for($x=0;
$x<100;$x++){
echo $x."<br>";

}







}
?>