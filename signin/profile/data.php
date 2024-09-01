<?php

$tknnum = $_POST['tknnum'];


$host = "localhost";
$username ="root";
$password = "";
$dbname = "user_data";

$con = mysqli_connect("localhost","root","","user_data");

if(!$con)
{
die("error".mysqli_connect_error());
}

$sql = "INSERT INTO appointment(tknnum) VALUES ('$tknnum')";

$rs = mysqli_query($con,$sql);
if($rs)
{
	echo"<h1><center>Slot Booked Time 10:00-11:00 am</center></h1>";
}
mysqli_close($con);
?>
