<?php
include "connection.php";


if(isset($_POST['delete']))
{
	$id = $_POST['id'];	
	$query="DELETE FROM facaulty WHERE id='$id'";
	$res=mysqli_query($con,$query);
	
	if($res)
	{
		echo "<script>window.alert('Data Deleted Succesfully'); window.location='facaulty.php';</script>";
		
	}
	
	else
	{
		die(mysqli_error($con));
	//echo "<script> alert('Data Not Deleted'); </script>";
	}
		
	
}
?>
