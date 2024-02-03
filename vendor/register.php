<?php

$uname=$_POST['username'];
$upass=$_POST['pass1'];

$cipher_text=md5($upass);
$message = "Please <a href='../shared/login.html'>Login</a> to access the website";

include_once "../shared/connection.php";

$status=mysqli_query($conn,"insert into user(username,password,usertype) values('$uname','$cipher_text','vendor')");
if($status)
{
    echo "Registration success!<br> $message";
}
else
{
    echo "Registartion Failed<br>";
    echo mysqli_error($conn);
}

?>