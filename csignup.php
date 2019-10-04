
<?php
include 'dbconnect.php';
$q1="select * from district_tbl";
$db1=mysqli_query($con,$q1);
?>
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
					
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="create_account_area">
							<h2 class="caa_heading">New Registration, for <font color=red>Customer</font></h2>
							<div class="caa_form_area">
								<div class="caa_form_group">
									<div class="login_email">
									<form action=csignup_action.php method="POST">
										<label>Name</label>
										<div class="input-area"><input type="text" name="name"/></div>
									</div>
									<div class="login_password">
										<label>Address</label>
										<div class="input-area"><textarea cols="6" rows="2" name="address"></textarea></div>
									</div>
									<div class="login_password">
										<label>Place</label>
										<div class="input-area"><input type="text" name="place"/></div>
									</div>
									
									
									<div class="login_password">
						             <label>District</label>
										<div class="input-area">
									<select name="district">
									
									<option value="Select" >Select</option>
									<?php
						while($fetch=mysqli_fetch_array($db1))
						{
                            ?>
               <option value="<?php echo $fetch['district_id']?>"><?php echo $fetch['district_name']?>  <?php
                        }
						?>
									</select></div>
									</div>
									
									
									<div class="login_password">
										<label>Email_id</label>
										<div class="input-area"><input type="email" name="email"/></div>
									</div>
									<div class="login_password">
										<label>Password</label>
										<div class="input-area"><input type="password" name="password"/></div>
									</div>
									
									
									
									<div class="login_password">
										<label>Phone</label>
										<div class="input-area"><input type="text" name="phone"/></div>
									</div>
									
									<p class="forgot_password">
										<a href="#" title="Recover your forgotten password" rel="">Forgot your password?</a>
									</p>
									<button type="submit" id="acc_Login"  name="register" class="btn btn-default acc_btn"> 
										<span> <i class="fa fa-lock btn_icon"></i> Register</span> 
									</button>
									<button type="submit" id="acc_Login" name="cancel" class="btn btn-default acc_btn"> 
										<span> <i class="fa fa-lock btn_icon"></i> Cancel</span> 
									</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
		
		<!-- INSERT VALUES -->
		
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