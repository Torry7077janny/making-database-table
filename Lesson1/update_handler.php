<?php
require 'config.php';
if(isset($_POST['user_id'])){
    $id=$_POST['user_id'];
    echo $id;

//    grab data from the form
    //if update butn is clicked
    if(isset($_POST['btn_update'])){

        $username= $_POST['username'];
        $firstname= $_POST['firstname'];
        $lastname= $_POST['lastname'];
        $email= $_POST['email'];



     $sql="UPDATE `users` SET `username`='$username',`firstname`='$firstname',`lastname`='$lastname',`email`='$email' WHERE id='$id'";
        //update
        if(mysqli_query($conn,$sql)){
            header("location:update.php?id=$id");
        }
    }





//    update data in db
}


























?>
