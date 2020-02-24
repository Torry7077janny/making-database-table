<?php
//php comments
//php files can contain text,html,css,javascript,and php code
//php code is executrd on the server,the results is returned to the browser as plain HTML
//php files have extentions ".php"

echo"Torry janny <br>";//php statementend with semi-colon
//echo: output data
//"Torry Janny":data to be displayed on browser HTML
echo "favorite movie mr and mrs smith <br>";
echo "<h1> favorite book racing the limits </h1><br>";
print "Basketball is fun <br>";

//Variables
//A variable starts with the $ sign, followed by the name of the variable
//A variable name must start with a letter or underscore character
//A variable name cannot start with a number
// A variable name can only contain alpha-numeric characters and underscores (A-Z, 0-9, and ...)
// Variable names are case sensitive ($age and SAGE are two different variables

$name ="Torry Janny<br>";
$_country ="Kenya<br>";
$age =18;
echo $age;
echo "<br>";
echo$name;
$favCar="hummer";
$Countryoforigin="Germany";
echo "This is my $favCar from $Countryoforigin";
echo "This is my ". $favCar." from ".$Countryoforigin;
echo $favCar.$Countryoforigin;
echo 34+23;


//php data types
//variables store diff data types and tthey can do diff things
//php has the following data types
//1.string
//these are sequence of character in double or single quotes
echo "Hello world";
echo "Hello world";
echo '<br>';
//String functions
//Functions:code that does repititive tasks
//Counting characters:are strlen ()function
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





//2. integers
//3.float
//4.boolearn
//5.array
//6.object
//7.null

































?>
