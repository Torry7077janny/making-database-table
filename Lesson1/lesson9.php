<?php

require 'header.php';

require 'config.php';

//input:username,firstname,lastname,email,password,confirm_password
//algorithm: step by step solution to a problem
//1.define empty variables to store incoming data
$username= $firstname= $lastname= $email= $password1= $password2= '';
//2.define empty variables to store errors
$username_err= $firstname_err= $lastname_err= $email_err=$password1_err=$password2_err='';
//3.check the request method
if($_SERVER['REQUEST_METHOD']=='POST'){
    //3.1 grab data using $_POST superg
    $username=$_POST['username'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password1=$_POST['pass1'];
    $password2=$_POST['pass2'];
echo $username,$firstname,$lastname,$email,$password1,$password2;
    if(empty($username)){
        $username_err=" PLease fill in username";
    }else{
        //if not empty clean data
        $username=mwoshomwosho($username);
    }

    if(empty($firstname)){
        $firstname_err="PLease fill in firstname";
    }else{
        //if not empty clean data
        $firstname=mwoshomwosho($firstname);
    }

    if(empty($lastname)){
        $lastname_err="PLease fill in lastname";
    }else{
        //if not empty clean data
        $username=mwoshomwosho($lastname);
    }


    if(empty($email)){
        $email_err="PLease fill in email";
    }else{
        //if not empty clean data
        $username=mwoshomwosho($email);
    }


    if(empty($password1)){
        $password1_err="PLease fill in password";
    }


    if(empty($password2)){
        $password2_err="PLease fill in password";
    }
    //check if password matched
    if($password1 != $password2){
        $password1_err="Password did not match";
    }else{
//        check the number of characters
        if(strlen($password1)<8){
            $password1_err="Password is less than 8 characters";
        }else{
            $password1=md5($password1);
            //add/insert data into the db table:users t:user mysqli_query()
            $sql="INSERT INTO `users`(`id`, `username`, `firstname`, `lastname`, `email`, `password`) VALUES (NULL,'$username','$firstname','$lastname','$email','$password1')";
            if(mysqli_query($conn,$sql)){
                header('location:index.php');
            }else{
                echo"Data not added<br>".mysqli_connect_error($conn);
                echo"$sql<br>";
            }


        }
    }

}

//4.echo received data

function mwoshomwosho($data){
    //removes white spaces
    $data=trim($data);
    //remove slashes
    $data=stripcslashes($data);
    //remove special character
    $data=htmlspecialchars($data);
    //return  a value
    return $data;
}

?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
    <fieldset>
        <label for="">username</label><span style="color:orangered">*</span>
        <span style="color:darkred"><?php echo $username_err?></span>
        <input type="text" name="username"placeholder="Enter username"><br>


        <label for="">firstname</label><span style="color:orangered">*</span>
        <span style="color:darkred"><?php echo $firstname_err?></span>
        <input type="text" name="firstname"placeholder="Enter firstname"><br>

        <label for="">lastname</label><span style="color:orangered">*</span>
        <span style="color:darkred"><?php echo $lastname_err?></span>
        <input type="text" name="lastname"placeholder="Enter lastname"><br>


        <label for="">email</label><span style="color:orangered">*</span>
        <span style="color:darkred"><?php echo $email_err?></span>
        <input type="email" name="email" placeholder="Enter email"><br>


        <label for="">password</label><span style="color:orangered">*</span>
        <span style="color:darkred"><?php echo $password1_err?></span>
        <input type="password" name="pass1" placeholder="Enter password"><br>

        <label for="">confirm password</label>
        <span style="color:darkred"><?php echo $password2_err?></span>
        <input type="password" name="pass2"placeholder="confirm password"><br>
        <button type="submit"name="signup-btn">signup</button>
    </fieldset>
</form>
<?php
require 'footer.php';





?>
