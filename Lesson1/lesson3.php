<?php
//php operators:used to perform operation on variables and values
//1.Arithmetics ops
//used with numerical values
//1.+ Addition
echo 3+3;
echo"<br>";
$sum=4+3;
echo  "The sum of 3+4 is".$sum;
echo"<br>";

//2. - minus
echo 3-3;
echo"<br>";
$sub=4-3;
echo "The sub of 3-4 is". $sub;
echo"<br>";

//3. * Multiplication
echo 3*3;
echo"<br>";
$mult=4*3;
echo "The mult of 3*4 is".$mult;
echo"<br>";

//4. /Division
echo 3/3;
echo"<br>";
$div=4/3;
echo $div;
echo"<br>";

//5.% Modulus
echo 3%3;
echo"<br>";
$mod=4%3;
echo "The mod of 3%4 is".$mod;
echo"<br>";

//6.**Exponential
echo 3**3;
echo"<br>";
$expo=4**3;
echo "The expo of 3**4 is".$expo;
echo"<br>";


//2.Assignment3
//used to write values to variables
//=:
$gender="male";
//+=:addition Assignment
$a=100;
$b=200;
//$a+$b;
$a=$a+=$b;
echo$a;
echo"<br>";

//-=: subtraction Assignment

//3.comparison
//used to compare two values
//1.== equals:Returns true if true values are equal
$x=10;
$y=10;
$check =$x==$y;//Returns true
var_dump($check);
echo "<br>";
$db_username="Torryjanny";
$db_password="1234pass";
//$check if data from the user matches data from database :user ==ops
$authenticate=$username==$db_username;//returns true
var_dump($authenticate);
echo"<br>";
//change user username
$username="cadbury";
$authenticate=$username==$db_username;//Returns false
var_dump($authenticate);
echo"<br>";
//===identical:returns if two values/variables are equal and of the same data tpe
$check=$username==="cadbury";
var_dump($check);
echo"<br>";
//3.!= not equal to:returns true if one variable is not equal to another variable
$email="torryjanny@gmail.com";
$check=$email!="cadbury choco@gmail.com";//returns true
var_dump($check);
echo"<br>";
//4.!==:not identical:returns true if one variable is not equal to another variable or
// they are not of the same type
$name="kim kardashian";//string
$age="30";//integer
$check=$name !==$age;//returns true
var_dump($check);
echo"<br>";
$check= 21==="21";
var_dump($check);
echo"<br>";
echo "TEST<br>";

//5.>greater than:returns true if a variable value is greater than the other
$check="n"=="n";
$check=3>2;
var_dump($check);//returns true
echo "TEST..<br>";
echo"<br>";
$check=3<2;
var_dump($check);//returns false
echo"<br>";

//4.logical
//Thr PHP logical operators are used to combine conditional statements.
//1.And: Returns true if both conditions are true
echo"<br>";
$check=100==100 and 200==200;
var_dump($check);
echo"<br>";
$age=18;
$country="Italy";
$check=$age==18 and $country=="Italy";
var_dump($check);
echo"<br>";

//2.Or :return true if either one of the conditions is true
$check=$age==17 and $country =="Italy";
var_dump($check);
echo"<br>";


















?>
