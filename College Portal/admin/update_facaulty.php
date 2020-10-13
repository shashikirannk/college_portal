<?php
include "../connection.php";
session_start();

if(isset($_POST['edit']))
{
	
	
	$query="UPDATE `facaulty` SET `id`=$_POST['id'] `facaulty_name`=$_POST['facaulty_name'],`department`=$_POST['department'],`position`=$_POST['position'],`images`=$_POST['facaulty_image']['name'] WHERE id=$_POST['id']";
			$query_run =mysqli_query($con,$query);
	
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
<!doctype html>
<html>
<head>
<title>GECK ADMIN PANEL</title>
<!--	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 --> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="./css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>


<style>

.header_color{
	margin:0px;
}

</style>
</head>
	
<body>



<?php include"../include/header_admin.php" ?>

<hr/>	


  


	
<div class="container">
	<div class="row ">
		<div class="col-sm-12">
		<form action="" method="post"> 
			<div class="form-group">
					<label>NAME</label>
						<input type="text" name="facaulty_name" class="form-control" placeholder="Enter a name" value="<?php $name ?>">
			  </div>
						  
						  <div class="form-group">
							<select name="department" class="form-group form-control" value="<?php $department ?>">
										<option>---------------------------------select department---------------------------------</option>
										<option>COMPUTER SCIENCE</option>
										<option>CIVIL</option>
										<option>ELECTRONICS</option>
										<option>MECHANICAL</option>
										<option>Others</option>
							</select>
						  </div>
						  
						  <div class="form-group">
							<label>Position</label>
							<input type="text" name="position" class="form-control" placeholder="Ex:- Proffesor Of CSE" value="<?php $position ?>">
						  </div>
						  
						  <div class="form-group">
							<label>UploadImage</label>
							<input type="file" class="form-control" name="facaulty_image" id="facaulty_image">
						  </div>
					  </div>
					  <div class="form-group">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<form action="code.php" method="post"> 
								<input type="hidden" name="id" value="<?php echo $id; ?>">
						 <td> <input type="submit" name="edit" class="btn btn-success" value="EDIT"> </td>
						</form>
						
					  </div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>

