<?php
include "connection.php";

$fetch="select * from event";
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
	background-color:lightblue;
}

.img-thumbnail{
	background-color:#00aaff;
	padding:0px;
}

.hovereffect {
width:100%;
height:100%;
float:left;
overflow:hidden;
position:relative;
text-align:center;
cursor:default;
}

.hovereffect .overlay {
width:100%;
height:100%;
position:absolute;
overflow:hidden;
top:0;
left:0;
opacity:0;
background-color:rgba(0,0,0.5,0.5);
color:pink;
-webkit-transition:all .4s ease-in-out;
transition:all .4s ease-in-out
}

.hovereffect img {
display:block;
position:relative;
-webkit-transition:all .4s linear;
transition:all .4s linear;
}

.hovereffect h2 {
text-transform:uppercase;
color:#fff;
text-align:center;
position:relative;
font-size:17px;
background:rgba(0,0,0,0.6);
-webkit-transform:translatey(-100px);
-ms-transform:translatey(-100px);
transform:translatey(-100px);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
padding:10px;
}

.hovereffect a.info {
text-decoration:none;
display:inline-block;
text-transform:uppercase;
color:#fff;
border:1px solid #fff;
background-color:transparent;
opacity:0;
filter:alpha(opacity=0);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
margin:50px 0 0;
padding:7px 14px;
}

.hovereffect a.info:hover {
box-shadow:0 0 5px #fff;
}

.hovereffect:hover img {
-ms-transform:scale(1.2);
-webkit-transform:scale(1.2);
transform:scale(1.2);
}

.hovereffect:hover .overlay {
opacity:1;
filter:alpha(opacity=100);
}

.hovereffect:hover h2,.hovereffect:hover a.info {
opacity:1;
filter:alpha(opacity=100);
-ms-transform:translatey(0);
-webkit-transform:translatey(0);
transform:translatey(0);
}

.hovereffect:hover a.info {
-webkit-transition-delay:.2s;
transition-delay:.2s;
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
							
							$name 		= $r['team_name'];
							$department = $r['department'];
							$description	= $r['description'];
							$images= $r['images'];						
					?>
						<div class="col-md-4 ">
							<div class="hovereffect">
							<div align="center" class="img-thumbnail img-responsive" style="margin:20px 20px;">
								<img src="./admin/event/<?php echo $images;?>" width="100%;" height="200px;">
								<div class="overlay">
								</br> </br>
								<h4><b> Team Name:- </b> <?php echo $name;?></h4>
								<h4><b> Department:- </b> <?php echo $department;?></h4>
								<h4><b>Description:- </b><?php echo $description;?></h4>
								</div>
								</div>
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