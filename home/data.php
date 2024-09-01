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

$sql = "INSERT INTO users(uname, pwd) VALUES ('$uname','$pwd')";

$rs = mysqli_query($con,$sql);
if($rs)
{
echo"Registered";
}
mysqli_close($con);
?>
