<?php
session_start();
include('../connection.php');

mysqli_select_db($con,'admin');
$email=$_POST['email'];
$password=$_POST['password'];

$s="select * from admin where email= '$email' && password= '$password' ";
$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);


if($num==1)
{
header("location:contact.php");
				}

				else
				{
					echo "<script>window.alert('Invalid Username/Email or password'); window.location='login.php';</script>";
					
				}
			
?>
