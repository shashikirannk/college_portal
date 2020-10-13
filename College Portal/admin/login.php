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

<!--
.border{
	border:0px;
	padding-radius:10px;
	width:100%;
	border-radius:100px;
}
-->

</style>


</head>
	
<body>



<!-- Login page -->
<body style=" background:url(img/log.jpg); background-size:cover;">

    <div class="container">    
        <div id="loginbox" style="margin-top:200px; margin-right:800px; width:450px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info"  style=" background:url(img/warer-flow-pipe3.gif); background-size:cover;">
                    <div class="panel-heading">
                        <div class="panel-title">Sign In <a href="../home.php" style="color:red;">Home</a></div>
                      
                    </div>     

                    <div style="padding-top:30px;" class="panel-body" >

                        <div style="display:none;" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form action="login_db.php" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" style=" background-color:transparent; color:#000;; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bolder;" name="email" value="" placeholder="Email"> 
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password" style=" background-color:transparent; color:#000;; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bolder;">
                            </div>

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button type="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-check"></span> Login</button>

                                    </div>
                                </div>
							</form>
                         </div>
					</div>
                    
				</div> 
			</div> <!-- /container -->

    <script src="js/ie10-viewport-bug-workaround.js"></script>
  


</body>
</html>