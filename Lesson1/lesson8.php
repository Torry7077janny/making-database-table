<?php
//SUPERGLOBALS
//Some pedifined variables in PHP are "superglobals", which means they are always accessible,regardless of scope.and you can access them
// from any functions,classs or file having without doing anything special.
//The PHP superglobal variables are:
//$_SERVER
//$_REQUEST
//$_POST
//$_GET
//$_FILES
//$_ENV
//$_COOKIE
//$_SESSION

//1.$_SERVER
//Has information for paths,headers
//$_SERVER['ELEMENT']
//Find location of PHP file
echo$_SERVER['PHP_SELF'].'<br>';

//finding host name
echo$_SERVER['SERVER_NAME'].'<br>';
echo$_SERVER['HTTP_HOST'].'<br>';
//request method



$age['Peter']=23;
$age['Cardi']=23;
$age['Bruno']=23;
$email=$name='';
echo$_SERVER['REQUEST_METHOD'].'<br>';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_REQUEST['jina'];
    $email=$_REQUEST['arafa'];
    echo"NAME IS$name and EMAIL is $email<br>";
}
//collecting data using the $_POST[]
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['jina'];
    $email=$_POST['arafa'];
    echo'USING THE$_POST[]'.'<br>';
}

?>


<h1> Collecting data using the $_REQUEST</h1>
<form action="lesson8.php"method="post">
    <input type="text" name="jina" placeholder="Enter name...">
    <input type="email" name="arafa" placeholder="Enter email...">
    <input type="submit" value="send data">
</form>

<form action="lesson8.php"></form>
<h1>collecting data using the $_POST</h1>
<!--$_GET is used to collect and send data from a form using the post method-->
<!--$_GET :used to collect data sent via URL-->

<?php
//Recieve data using the $_GET[]
$the_name=$_GET['name'];
$the_age=$_GET['age'];
echo"$the_name<br>";
echo"$the_age<br>";



?>
<a href="lesson8.php?name=Liam&age=18">send</a>