<?php
//before using the database you have to connect to it by providing the followinginfo
$servername='localhost';
$username='root';
$password='';
$db_name='miteveningdb';
//Php has a helper functions that will make database interactions easy
//To connect to a database use the php function called mysqli_connect()
//mysqli function returns a boolean datatype
$conn=mysqli_connect($servername,$username,$password,$db_name);
//check if conn is successful
if(!$conn){
    die ("connection to the database unsuccessful<br>".mysqli_connect_error());
}else{
    echo"connection successful<br>";
}

//add/insert data into the db table:users t:user mysqli_query()
$sql="INSERT INTO `users`(`id`, `username`, `firstname`, `lastname`, `email`, `password`) VALUES (NULL,'Torry J','Janny','Williams','torry@gmail.com','cadbury')";
if(mysqli_query($conn,$sql)){
    echo"Data added successfully<br>";
}else{
    echo"Data not added<br>".mysqli_connect_error($conn);
    echo"$sql<br>";
}















































?>
