<!DOCTYPE HTML>
<html lang="en-US">


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FancyShop - Ecommerce Bootstrap Template</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,600,700,800" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">	
	<link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" href="css/owl.theme.default.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.min.css" />
	<link rel="stylesheet" href="css/meanmenu.min.css" />
	<link rel="stylesheet" href="css/venobox.css" />
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />	
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="css/responsive.css" />	
</head>
	<body>
	
		<!--  Preloader  -->
		
		<div class="preloader">
			<div class="status-mes">
				<div class="bigSqr">
					<div class="square first"></div>
					<div class="square second"></div>
					<div class="square third"></div>
					<div class="square fourth"></div>
				</div>
				<div class="text_loading text-center">loading</div>
			</div>
		</div>
		
		<!--  Start Header  -->
		 <?php include ('menu.php'); ?>
		<!--  End Header  -->
		
		<!-- Page item Area -->
		
		
		
		<!-- Login Page -->
		<div class="login_page_area">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="create_account_area">
							<h2 class="caa_heading">Already registered?</h2>
							<div class="caa_form_area">
								<div class="caa_form_group">
									<div class="login_email">
									<form action=check_login.php method="POST">
										<label>Email address</label>
										<div class="input-area"><input type="email" name="uname"/></div>
									</div>
									<div class="login_password">
										<label>Password</label>
										<div class="input-area"><input type="password" name="password"/></div>
									</div>
									<p class="forgot_password">
										<a href="#" title="Recover your forgotten password" rel="">Forgot your password?</a>
										<?php
										if(isset($_GET['error']))
											{
											$error=$_GET['error'];
											echo "<font color=red>$error";
											}
											?>
										
									</p>
									<button type="submit" id="acc_Login" class="btn btn-default acc_btn"> 
										<span> <i class="fa fa-lock btn_icon"></i> Sign in </span> 
									</button>
									                   
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
		
		<!--  FOOTER START  -->
		<footer class="footer_area">
		 	<div class="container">
				<div class="row">				
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Site Developed by Anittamol Chacko ,anittamolchacko@mca.ajce.in &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MCA@AJCE
					
				</div>
			</div>
	
		
			

		<script src="js/vendor/jquery-1.12.4.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.meanmenu.min.js"></script>
		<script src="js/jquery.mixitup.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/venobox.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/simplePlayer.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>