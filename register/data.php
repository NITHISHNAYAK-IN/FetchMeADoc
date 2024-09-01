<?php

$uname = $_POST['uname'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];
$phn = $_POST['phn'];


$host = "localhost";
$username ="root";
$password = "";
$dbname = "user_data";

$con = mysqli_connect("localhost","root","","user_data");

if(!$con)
{
die("error".mysqli_connect_error());
}

$sql = "INSERT INTO users(uname, pwd, email, phn) VALUES ('$uname','$pwd','$email','$phn')";

$rs = mysqli_query($con,$sql);
if($rs)
{
header('Location: registered/index.html');
}
mysqli_close($con);
?>
