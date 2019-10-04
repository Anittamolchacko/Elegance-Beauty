<?php
session_start();
$login=$_SESSION['login'];
$type=$_SESSION['type'];
$usr_name=$_SESSION['usr_name'];
if($login)
{
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
		
	<?php include("h_menu.php"); 
	include("dbconnect.php");?>	
		
		
		
		
		
		
		
		
		
		<!-- Login Page -->
		<div class="login_page_area">
			<div class="container">
				<div class="row">
					
					</div>
					
						<div class="create_account_area">
							<h2 class="caa_heading">Elegance Beauty</h2>
							<?php
							$login_id=$_SESSION['login_id'];
							//echo $login_id;

							$sql="select * from homemakers_reg where login_id='$login_id'";
							//echo $sql;
							$result=mysqli_query($con,$sql);
							//$rowcount=mysqli_num_rows($result);

							//if($rowcount!=0)
								
							//echo"found";
							if($row=mysqli_fetch_array($result))
							{
								$db_name=$row['name'];
								$db_address=$row['address'];
								$db_place=$row['place'];
								$db_district=$row['district_id'];
								$db_address=$row['address'];
								$db_email=$row['email'];
								$db_phone=$row['phone'];
								$db_photo=$row['photo'];
								?>
								<table width=100% border=1>
									<tr><td><font color=red size=3>Homemaker name :<td align=left><?php echo $db_name; ?>
			
									<tr><td><font color=red size=3>Homemaker address :<td align=left><?php echo $db_address; ?>
									<tr><td><font color=red size=3>Homemaker place :<td align=left><?php echo $db_place; ?>
									<tr><td><font color=red size=3>Homemaker district :<td align=left><?php echo $db_district; ?>
									<tr><td><font color=red size=3>Homemaker email :<td align=left><?php echo $db_email; ?>
									<tr><td><font color=red size=3>Homemaker phone :<td align=left><?php echo $db_phone; ?>
									<tr><td><font color=red size=3>Homemaker photo :<td align=left><?php echo $db_photo; ?>
								</table>
								
								<?php
							}
					?>
							
						</div>
					
				</div>
			</div>
		</div>		
		<br><br><br><br><br><br>
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

<?php
}
else
	header("location:../MAIN PROJECt/login.php");
?>