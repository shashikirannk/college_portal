<?php

include "connection.php";

$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$email=$_POST['email'];
$department=$_POST['department'];
$msg=$_POST['msg'];

$contact="INSERT INTO `contact`(`first_name`, `last_name`, `email`, `department`, `message`) VALUES ('$f_name','$l_name','$email','$department','$msg')";
$done=mysqli_query($con,$contact);

if($done)
{
	echo "<script> window.alert('data stored successfully'); window.location='contact.php'; </script>";
}
else{
	
	die(mysqli_error($con));
}
?>