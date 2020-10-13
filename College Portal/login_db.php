<?php
session_start();
include('include/connection.php');

mysqli_select_db($con,'s_reg');

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$s="select * from s_reg where name='$name' || email= '$email' && password= '$password' ";
$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);


if($num)
		{
					$_SESSION['name']=$name;
					header("location:s_exam.php");
				}

				else
				{
					echo "<script>window.alert('Invalid Username/Email or password'); window.location='login.php';</script>";
				}
			
?>
