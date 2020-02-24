<?php

//Conditions statements are used to perform different actions based on different conditions.
//To allow your code to perform diff actions based on diff variables.
//php has the following if conditional statements
//
//1. If statement .executes some code if one condition is true

$age=16;
if($age==16){
    echo"You are old enough";
}
//2. If ...else statement -executes some codes if condition is true and
// another code if that condition is false
if($age>17){
    echo"You are old enough";
}else{
    echo"False age is not greater than 17";
}
$age=17;
if($age<18){
    echo "You can not drive.Under age";
}else{
    echo "You can drive";
}
$db_name="Mike";
$user_name="John";;
if($user_name!=$db_name){
    echo'<p style="color:red">your credentials are wrong<a href="#">login</a></p>';
}else{
    echo '<p style="color:green">Welcome to our index page</p>';
}

//3.If...elseif...else statement executes different codes for more than two conditions switch statements -selects one of
// many blocks of code to be executed.
//if(condition1){
//    code to execute if true;
//}elseif (condition2){
//    code to execute if true;
//}elseif(condition3){
//    code to execute if true;
//}else {
//    code to execute above conditions are false
//}
$color="blue";
if($color=="red"){
    echo'<h1>MAN CITY FAN</h1>';
}elseif($color=="white"){
    echo"<h1>CHEALSE FAN </h1>";
}else{
    echo"NON OF THE ABOVE";

}
//if (condition) code execute}
//switch(n){
//    case label1:
//        code to execute if n=label1
//    break
//
//    case label13:
//        code to execute if n =label2
//    break
//    case label3:
//        code to execute if n =label3
//    break
//
//    default{
//            code to execute if the above conditions are false
//    }
//}
$color=white;
switch($color="white") {
    case blue;
        echo '<p>chealse fan</p>';
        break;

    case Red;
        echo '<p>MANU FAN</p>';
        break;
    case white;
        echo '<p>TOTE FAN</p>';
        break;

    default;
        echo "none of the above";
    }













?>
