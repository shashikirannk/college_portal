<?php
session_start();

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

.border{
	border-radius:50%;
}


</style>


</head>
	
<body>

<?php include "include/header.php"; ?>

<!-- Login page -->

<div class="container">
	<div class="row">
		<hr/>
		<div class="col-sm-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2> Login </h2>
				</div>
				
				<div class="panel-body">
					<form action="login_db.php" method="post">
						<div class="form-group">
							<div class="col-sm-8">
								<label>	Enter Email Id</label>
								<input type="email" name="email" class="form-control" placeholder="email"/><br/>
							</div>
						</div>

						<div class="form-group">		
							<div class="col-sm-8">
								<label>	Enter Password</label>
								<input type="password" name="password" class="form-control" placeholder="password"/></br>
								
							</div>
						</div>

						<div class="form-group form-check">
							<div class="col-sm-8">
						  <label class="form-check-label">
							<input class="form-check-input" type="checkbox" name="remember"> Remember me
						  </label> <br/>
							</div>
						</div>

						<div class="form-group ">
						 <div class="col-sm-8 ">
						<button type="submit" class="btn btn-primary">Submit</button>
						
						</div>
					</div>

						<div class="form-group">		
							<div class="col-sm-8" align="center" >
								<p  style="color:red;">	Not Yet Register..??</p>
								<a href="register.php"> Clich Here</a>

								<br></br><br></br>
							</div>
						</div>

						<br></br><br></br><br></br>


				  </form>

				</div>
			</div>
		</div>
	 </div>
</div>


<?php include"include/footer.php"; ?>

</body>
</html>