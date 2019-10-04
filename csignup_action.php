<?php
include 'dbconnect.php';
			$name=$_POST['name'];
			$address=$_POST['address'];
			$place=$_POST['place'];
			$district=$_POST['district'];
			$email=$_POST['email'];
			$pwd=$_POST['password'];
			$phone=$_POST['phone'];
$sql="select * from login where username='$email'";
$result=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($result);
if($rowcount==0)
{
		
		$a="insert into login(`username`,`pass`,`type`,`status`) values ('$email','$pwd',2,1)";

							if(mysqli_query($con,$a))
							  {
								  $q3=mysqli_query($con, "select login_id from login where username='$email'");
								  $q7=mysqli_fetch_array($q3,MYSQLI_ASSOC);
								  $lid=$q7['login_id'];
								  $q4="insert into customers_reg(`name`,`address`,`place`,`district`,`email`,`phone`,`login_id`,`status`) values('$name','$address','$place','$district','$email','$phone','$lid',1)";
			  
								$q5=mysqli_query($con,$q4);
									
										if($q5)
										{
												header("location:../MAIN PROJECT/login.php?error=Successfully registered");
										}
										else
										{
											header("location:../MAIN PROJECT/login.php?error=error");
											
										}
							  }
}
else
{
	header("location:../MAIN PROJECT/login.php?error=User Already Exist");
											
}					
?>							
						
?>	