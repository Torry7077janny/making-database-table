<?php
//php data types
////variables store diff data types and tthey can do diff things
////php has the following data types
////1.string
////these are sequence of character in double or single quotes
echo "Hello world";
echo "Hello world";
echo '<br>';
////String functions
////Functions:code that does repititive tasks
////Counting characters:are strlen ()function
echo strlen("hello world");
$words_in_my_name =strlen("Torry Janny");
echo"<br>";
//counting words in string use str word count()function
echo str_word_count("Torry janny");
echo "<br>";
echo$words_in_my_name;
echo"<br>";
//Reversing a string :use strrev()function
echo strrev("Kobe Bryat");
echo "<br>";
$name="Kobe Bryat";
echo strrev($name);
echo"<br>";
//searching a text within a string use strpos()function
echo strpos("I am Kenyan","Kenyan");
echo "<br>";
//Replace a text in a string:use str_replace()
echo str_replace("Kenyan","Ugandan","I am Kenyan");
echo"<br>";


//2. integers

//Non decimal numbers
$number_of_cows=18;
echo $number_of_cows;
echo "<br>";
var_dump($number_of_cows);
echo "<br>";
var_dump($name);//checks datatypes
echo "<br>";
echo is_int($number_of_cows);
echo is_int($name);
echo "<br>";
echo is_integer($number_of_cows);
is_long($number_of_cows);


//3.float
//numbers with decimal points
$height=3.5;
echo "height";
echo "<br>";
is_float($height);
var_dump(is_float($height));
echo "<br>";
is_double($height);
echo "<br>";



//casting/transforming/changing float to an integer
$volume_float=700.223;
$volume_integer=(int)$volume_float;
echo $volume_integer;
echo "<br>";
//changing/transforming/changing string to an integer
$age_string="19";
$age_integer=(int)$age_string;
echo "<br>";


//4.boolean

$is_tall=true;
$is_lightskin=false;
echo $is_lightskin;
echo "<br>";


//5.array
//6.object
//7.null
?>