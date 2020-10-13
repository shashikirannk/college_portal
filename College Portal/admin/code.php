<?php
include "../connection.php";


//inserting of facaulty
if(isset($_POST['save_facaulty']))
{
	$name 		= $_POST['facaulty_name'];
	$department = $_POST['department'];
	$position	= $_POST['position'];
	$images	 	= $_FILES['facaulty_image']['name'];

/*
	if(file_exists("upload/".$_FILES['facaulty_image']['name']))
	{
		$store = $_FILES['facaulty_image']['name'];
		$SESSION['status']= "Image already exists. '.$store.'";
		header('location:facaulty.php');
	}
	else
	{
*/
			$query="INSERT INTO `facaulty`(`facaulty_name`, `department`, `position`, `images`) VALUES ('$name','$department','$position','$images')";
			$query_run =mysqli_query($con,$query);


			if($query_run)
			{
				
				move_uploaded_file($_FILES["facaulty_image"]["name"], "upload/".$_FILES['facaulty_image']['name']);
			/*	echo "<script> window.alert('data stored successfully'); window.location='facaulty.php'; </script>";
				*/
				$SESSION['success'] = "facaulty Added";
				header('location:facaulty.php');
				
			}
			
			else
			{
				
				die(mysqli_error($con));
				
				$SESSION['success'] = "facaulty Not added";
				header('location:facaulty.php');
				
			}
}






//inserting of  new event
if(isset($_POST['event']))
{
	$name 		= $_POST['team_name'];
	$department = $_POST['department'];
	$description	= $_POST['description'];
	$images	 	= $_FILES['facaulty_image']['name'];

/*
	if(file_exists("upload/".$_FILES['facaulty_image']['name']))
	{
		$store = $_FILES['facaulty_image']['name'];
		$SESSION['status']= "Image already exists. '.$store.'";
		header('location:event.php');
	}
	else
	{
*/
			$query="INSERT INTO `event`( `team_name`, `department`, `description`, `images`) VALUES ('$name','$department','$description','$images')";
			$query_run =mysqli_query($con,$query);


			if($query_run)
			{
				
				move_uploaded_file($_FILES["facaulty_image"]["name"], "event/".$_FILES['facaulty_image']['name']);
			/*	echo "<script> window.alert('data stored successfully'); window.location='facaulty.php'; </script>";
				*/
				$SESSION['success'] = "event Added";
				header('location:event.php');
				
			}
			
			else
			{
				
				die(mysqli_error($con));
				
				$SESSION['success'] = "event Not added";
				header('location:event.php');
				
			}
}





//Deleted table of facaulty
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





//Deleted table of Newfacaulty
if(isset($_POST['event_delete']))
{
	$id = $_POST['id'];	
	$query="DELETE FROM event WHERE id='$id'";
	$res=mysqli_query($con,$query);
	
	if($res)
	{
		echo "<script>window.alert('Data Deleted Succesfully'); window.location='event.php';</script>";
		
	}
	
	else
	{
		die(mysqli_error($con));
	//echo "<script> alert('Data Not Deleted'); </script>";
	}	
	
}





//Deleted table of student registration
if(isset($_POST['delete_sreg']))
{
	$id = $_POST['id'];	
	$query="DELETE FROM s_reg WHERE id='$id'";
	$res=mysqli_query($con,$query);
	
	if($res)
	{
		echo "<script>window.alert('Data Deleted Succesfully'); window.location='admin_home.php';</script>";
		
	}
	
	else
	{
		die(mysqli_error($con));
	//echo "<script> alert('Data Not Deleted'); </script>";
	}	
	
}
	
	
//update facaulty


if(isset($_POST['edit']))
{
	$id 		= $_POST['id'];	
	$name 		= $_POST['facaulty_name'];
	$department = $_POST['department'];
	$position	= $_POST['position'];
	$images	 	= $_POST['facaulty_image']['name'];
	$fetch="select * from facaulty";
	$res=mysqli_query($con,$fetch);


	$query="UPDATE `facaulty` SET `facaulty_name`=$name,`department`=$department,`position`=$position,`images`=$images WHERE id='$id'";
			$query_run =mysqli_query($con,$query,$res);
	
	if($query_run)
	{
		move_uploaded_file($_FILES["facaulty_image"]["name"], "upload/".$_FILES['facaulty_image']['name']);
		echo "<script>window.alert('UPDATED Facaulty'); window.location='facaulty.php';</script>";
		
	}
	
	else
	{
		die(mysqli_error($con));
	//echo "<script> alert('Data Not Deleted'); </script>";
	}
		
	
}




?>

