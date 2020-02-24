<?php
require 'header.php';
require 'config.php';
echo "Welcome to details page";
//grab id from url using the $get[]
//get first checks
if (isset($_GET['id'])){
    $id=$_GET['id'];//use this id to select user from the table/database
    $sql="SELECT `id`, `username`, `firstname`, `lastname`, `email`, `password` FROM `users` WHERE id='$id'";
    $user=mysqli_query($conn,$sql);

    while($row=mysqli_fetch_array($user)){
        echo $row['id']."<br>";
        echo $row['username']."<br>";
        echo $row['firstname']."<br>";
        echo $row['lastname']."<br>";
        echo $row['email']."<br>";
        echo $row['password']."<br>";

    }
}
require 'footer.php';
?>
