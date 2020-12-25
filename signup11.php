<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
$username=$_POST['fullname'];
$age=$_POST['age'];
$mobno=$_POST['mobileno'];
$email=$_POST['email'];
$pass1=$_POST['password'];
$pass2=$_POST['password2'];


//connect to database//

$link= new mysqli("localhost", "root", "", "customerinfo");

//check connection//

if($link->connect_error)
{
die("connection failed: " .$link->connect_error);
}

//insert data//

$sql= "INSERT INTO sign VALUES ('$username', '$age','$mobno', '$email', '$pass1','$pass2' )";
	  
if(mysqli_query($link,$sql)===TRUE)
{
echo "<script language = 'javascript' type = 'text/javascript'> alert('you have sucessfully created your account, now you can log in')</script>";
echo "<script language = 'javascript' type = 'text/javascript'>
window.location.assign('https://localhost/1/index.html')</script>";;
}

else
{
echo "ERROR: " .$sql . "<br>" . $link->error;
}

$link->close();

}
?>