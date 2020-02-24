<?php
require 'header.php';
require 'config.php';
$id=$username=$firstname=$lastname=$email='';
$username_err=$firstname_err=$lastname_err=$email_err='';
echo "Welcome to Update pageDemo";
//grab id from url using the $get[]
//get first checks
if (isset($_GET['id'])){
    $id=$_GET['id'];//use this id to select user from the table/database
    $sql="SELECT `id`, `username`, `firstname`, `lastname`, `email`, `password` FROM `users` WHERE id='$id'";
    $user=mysqli_query($conn,$sql);

    while($row=mysqli_fetch_array($user)){
     $id= $row['id'];
        $username= $row['username'];
        $firstname= $row['firstname'];
        $lastname= $row['lastname'];
        $email= $row['email'];
        echo $row['password'];
     }
}





?>
<form action="update_handler.php" method="post">
    <fieldset>
        <div class="form group">
            <label for="username">Username</label>
            <input type="text"name="username" value="<?php echo $username?>">
            <input type="text" hidden name="user_id" value="<?php echo $id?>">
        </div>

        <div class="form group">
            <label for="firstname">Firstname</label>
            <input type="text"name="firstname" value="<?php echo $firstname?>">
        </div>

        <div class="form group">
            <label for="lastname">Lastname</label>
            <input type="text"name="lastname"value="<?php echo $lastname?>">

        </div>

        <div class="form group">
            <label for="email">Email</label>
            <input type="email"name="email"value="<?php echo $email?>">
        </div>
        <button type="submit" name="btn_update" class=" btn btn-success">update</button>
    </fieldset>
</form>

<?php

require 'footer.php';

?>
