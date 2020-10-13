<?php
session_start();
include('connection.php');
?>
<!doctype html>
<html >
<head>

    <title>GECK </title>
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
	
.q{
	margin:right;
}

body{
	background:url("./img/geck.jpg") no-repeat;
	background-size:100% 800px;
	
}

.theory {
	margin:20px;
	color:white;
	font-size:20px;
}
 
</style>
</head>
	
<body>

<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<div class="theory"><br/><br/><br/>
				<p style="color:red;"> Government Engineering College , Krishnarajpet</p>
				
				<h2 style="color:pink;"> INTERSTED, JOIN OUR COLLEGE ? </h2>		
					<br/><br/>
				<h2 style="color:red;">	<b>For Any Query , Fillup This Form.</b></h2>
				
			</div>
		</div>
		
		<div class="col-sm-6">		
			<div class="panel-body">
		
			<form action="contact_db.php" method="POST"> <br/><br/><br/><br/><br/>
					<div class="form-group col-sm-6">
						<input class="form-control" type="text" name="f_name" placeholder="First_Name"/>
					</div>
					
					<div class=" form-group col-sm-6">
						<input class="form-control" type="text" name="l_name" placeholder="Last_Name"/>
					</div>
					
					<div class="form-group col-sm-12">
						<input class="form-control" type="email" name="email" placeholder="Email"/>
					</div>
					
					<div class="form-group col-sm-12">
						<select name="department" class="form-group form-control">
							<option>---------------------------------select department---------------------------------</option>
							<option>COMPUTER SCIENCE</option>
							<option>CIVIL</option>
							<option>ELECTRONICS</option>
							<option>MECHANICAL</option>
						</select>
					</div>
					
					<div class="form-group col-sm-12">
						<textarea class="form-control" rows="10" cols="30" name="msg" placeholder="Message or Query"></textarea>
					</div>
					
					<div class="form-group" align="center">
						<div class="col-sm-12" >
							<button type="submit" class="btn btn-primary btn-block">Submit</button> <br/>
						</div>
					</div>
			</form>
	</div>
	
	
</div>
<div>
	
</body>
</html>