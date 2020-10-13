<?php
include "../connection.php";

$fetch="select * from contact";
$res=mysqli_query($con,$fetch);

if(!$res)
{
	die(mysqli_error($con));
}

?>

<!doctype html>
<html>
<head>
<title>admin_contact</title>

<!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>


<style>

body{
margin-top:0px;
}

</style>
</head>
	
<body>

<?php include"../include/header_admin.php" ?>

<hr/>	

<!--		
<div class="container">
	<div class="row">
		<div class="col-sm-12">
-->			<div class="panel panel-primary">
				<div class="panel-heading">
			
			<h2> CONTACT US DETAILS </h2>
				</div>
			</div>
			
			<table class="table table-hover">
					  <thead>
						<tr>
						  <th scope="col">SL .NO</th>
						  <th scope="col">FIRST NAME</th>
						  <th scope="col">LAST NAME</th>
						  <th scope="col">EMAIL </th>
						  <th scope="col">DEPARTMENT</th>
						  <th scope="col">MESSAGE</th>
						</tr>
					  </thead>
					  <tbody>
					
					<?php 
						while($r=mysqli_fetch_assoc($res))
						{
							$id=$r['id'];
							$f_name=$r['first_name'];
							$l_name=$r['last_name'];
							$email=$r['email'];
							$department=$r['department'];
							$msg=$r['message'];
					
					?>
						<tr>
						  
						  <td> <?php echo $id; ?> </td>
						  <td><?php echo $f_name; ?></td>
						  <td><?php echo $l_name; ?></td>
						  <td><?php echo $email; ?></td>
						  <td><?php echo $department; ?></td>
						  <td><?php echo $msg; ?></td>
						 </tr>
						<?php } ?>
					  </tbody>
					</table>
							
			
		</div>
	</div>
<div>

</body>
</html>