<?php
include "connection.php";

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
<title>GECK</title>
	
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

<!-- style by me -->
<link rel="stylesheet" href="./include/style.css" />


	<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


<style>
.ab{
	background-color: black;
}

.ef{
	color: green;
}

body{
	background-color:brown;
}

.img-thumbnail{
	background-color:#00aaff;
	padding:0px;
}

</style>
</head>
	
<body>

<?php include "include/header.php"; ?>



<div class="container">
	<div class="row" >
		<div class="col-md-12">
			<div class="g_img">
					<?php 
						while($r=mysqli_fetch_assoc($res))
						{
							$name=$r['facaulty_name'];
							$department=$r['department'];
							$position=$r['position'];
							$images= $r['images'];					
					?>
						<div class="col-md-4 ">
							<div align="center" class="img-thumbnail" style="margin:20px 20px;">
								<img src="./admin/upload/<?php echo $images;?>" width="100%;" height="200px;">
								<h4><b> Name:- </b> <?php echo $name;?></h4>
								<h4><b> Department:- </b> <?php echo $department;?></h4>
								<h4><b>Position:- </b><?php echo $position;?></h4>
								
							</div>
						</div>
					<?php } ?>
			</div>
		</div>
	</div>
</div>




<div>
<?php include"include/footer.php"; ?>
</div>
</body>
</html>