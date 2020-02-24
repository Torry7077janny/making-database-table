<?php
//A function is a block of statements that can be used repeatedly in  a program
//A function will not execute  automatically when a page loads
//A function will be executed by a call to the function

//function creation/declaration
function greetings1(){
    echo"hello world  i am PHP developer<br>";
}
//a function with parameters
function greetings2($name){
    echo" Hello world my name is$name and i am a php developer<br>";

}
//function with more than one parameter
//calling/using the function
function greetings3($name, $country,$age){
    echo"Hello world my name is $name$<br> and i am a php developer,from $country <br> i am $age years old<br>";
}

//functions with default arguments
function greetings4($county='Kiambu'){
    echo "$county<br>";
}
greetings1();
greetings2('Torry janny');
greetings3('Torry janny','Kenya','20');
greetings4();//without default arguments
greetings4('Mombasa');//without default arguments




//Functions thatreturn a value:use return statement
function greetings5(){
return"I am a GEEK ONJI";
}
//calling a function that returns a value
$jocker=greetings5();
echo $jocker."<br>";
function calculateDeni($geek1,$geek2,$geek_default=300){
$sum=$geek1+ $geek2 +$geek_default;
return$sum;
}
$amount1=calculateDeni('100','200');
$amount2=calculateDeni('100','200','500');
echo "TOTAL:$amount1<br>";
$totalAmount=$amount1+$amount2;
echo $totalAmount."<br>";




//A function that takes an array as an arg
function loopArray($name_of_array){
    foreach($name_of_array as $item){
        echo"$item<br>";
    }
}




function loopArray2($name_of_array,$myforeach=true){
    if ($myforeach) {
        //if foreach

        echo "FOR EACH LOOP EXECUTING<br>";
        foreach ($name_of_array as $item) {
            echo "$item<br>";

        }
    } else {
        echo "FOR LOOP EXECUTING<br>";
        for ($x = 0; $x < count($name_of_array); $x++) {
            echo "$name_of_array[$x] <br>";

        }
    }
}


$hobby=array('Reading','listening to music','watching movies','talking');
//loopArray2
loopArray2($hobby,$myforeach=false);

loopArray2($hobby);
function areaCircle($radius,$cm=true){
    $area=3.142*$radius*$radius;
    if($cm){
        echo"The area in centimeteris $area cm square";
    }else{
        //if unit of measurement is m
        echo "The are in meters is$area m square";
    }
}
areaCircle(7);//in cm
areaCircle('7','false')//in cm


























?>