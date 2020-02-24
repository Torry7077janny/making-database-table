<?php
//before using the database you have to connect to it by providing the following infomation
$servername='localhost';
$username='root';
$password='';
$db_name='dukamoja';
//Php has a helper functions that will make database interactions easy
//To connect to a database use the php function called mysqli_connect()
//mysqli function returns a boolean datatype
$conn=mysqli_connect($servername,$username,$password,$db_name);
//check if conn is successful
if(!$conn){
    die ("connection to the database unsuccessful<br>".mysqli_connect_error());
}
?>