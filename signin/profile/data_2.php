<?php
$voicecall = $_POST['voicecall'];
$videocall = $_POST['videocall'];


$host = "localhost";
$username ="root";
$password = "";
$dbname = "user_data";

$con = mysqli_connect("localhost","root","","user_data");

if(!$con)
{
die("error".mysqli_connect_error());
}

$sql = "INSERT INTO oc(voicecall, videocall) VALUES ('$voicecall', '$videocall')";

$rs = mysqli_query($con,$sql);
if($rs)
{
	echo"<h1><center>Please wait.....[Slot is available] Your Request Has Been Recorded, We will get in touch with you soon :D Thank You.</center></h1>";
	  header( "refresh:15; url=https://meet.google.com/piq-qrmm-zfs 
 " ); 
 

}
mysqli_close($con);
?>
