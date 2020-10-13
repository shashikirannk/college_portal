<?php
include "../connection.php";

$fetch="select * from facaulty";
$res=mysqli_query($con,$fetch);

if(!$res)
{
	die(mysqli_error($con));
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


  <div class="modal" id="facaultymodal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">ADD Facaulty</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
		<form action="code.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">         
      <div class="modal-body">
        <div class="form-group">
			<label>NAME</label>
			<input type="text" name="facaulty_name" class="form-control" placeholder="Enter a name">
		  </div>
		  
		  <div class="form-group">
			<select name="department" class="form-group form-control">
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
			<input type="text" name="position" class="form-control" placeholder="Ex:- Proffesor Of CSE">
		  </div>
		  
		  <div class="form-group">
			<label>UploadImage</label>
			<input type="file" class="form-control" name="facaulty_image" id="facaulty_image">
		  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="save_facaulty" class="btn btn-primary">Save</button>
      </div>
	  </form>
        </div>
        
        
        
      </div>
    </div>
  </div>




	
<div class="container">
	<div class="row ">
		<div class="col-sm-12">
		
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h3> Faculties 
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#facaultymodal">
						ADD
						</button>	 </h3>		
				</div>

			<div class="card-body">
				
				<?php 
				if(isset($_SESSION['success'])&& $_SESSION['success'] !='')
				{
					echo '<h2 class="bg-primary text-white"> '.$_SESSION['success'].' </h2>';
					unset($_SESSION['success']);
				}
				
				if(isset($_SESSION['status'])&& $_SESSION['status'] !='')
				{
					echo '<h2 class="bg-primary text-white"> '.$_SESSION['status'].' </h2>';
					unset($_SESSION['status']);
				}
				?>
				
				
				<div class="table-responsive">

				<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
					  <thead>
						<tr>
						  <th scope="col">sl. no</th>
						  <th scope="col">NAME</th>
						  <th scope="col">Department</th>
						  <th scope="col">Branch</th>
						  <th scope="col">Image</th>
						  
						  <th scope="col">Delete</th>
						</tr>
					  </thead>
					  <tbody>
					<?php 
						while($r=mysqli_fetch_assoc($res))
						{
							$id=$r['id'];
							$name=$r['facaulty_name'];
							$department=$r['department'];
							$position=$r['position'];
							$images= $r['images'];					
					?>
					
					
						<tr>
						  
						  <td> <?php echo $id; ?> </td>
						  <td><?php echo $name; ?></td>
						  <td><?php echo $department; ?></td>
						  <td><?php echo $position; ?></td>
						  <td><img src="./upload/<?php echo $images;?>" width="100px;" height="100px;"></td>
						 
						 
						 
						 
						<form action="code.php" method="post"> 
								<input type="hidden" name="id" value="<?php echo $id; ?>">
						 <td> <input type="submit" name="delete" class="btn btn-danger" value="DELETE"> </td>
						</form>
						
						</tr>
						<?php }  ?>
					  </tbody>
					</table>
								
			</div>
		</div>
	</div>




</body>
</html>