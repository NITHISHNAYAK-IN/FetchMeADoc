<?php

$uname = $_POST['uname'];
$pwd = $_POST['pwd'];


$host = "localhost";
$username ="root";
$password = "";
$dbname = "user_data";

$con = mysqli_connect("localhost","root","","user_data");

if(!$con)
{
die("error".mysqli_connect_error());
}

$sql="select *from users where uname = '$uname' and pwd='$pwd'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1)
{
	echo"<h1><center>Login Successfull</center></h1>";
	
	}
else{
	echo"<h1><center>Login Failed</center></h1>";
	}
