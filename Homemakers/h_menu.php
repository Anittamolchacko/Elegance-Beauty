<?php include('dbconnect.php'); ?>
<!--  Start Header  -->
		 <!--  HEADER START  -->
			
			<div class="header_btm_area">
				<div class="container">
					<div class="row">		
						<div class="col-xs-12 col-sm-12 col-md-3"> 
					<?php
					$login_id=$_SESSION['login_id'];
					$sql1="select * from homemakers_reg where login_id='$login_id'";
					$result1=mysqli_query($con,$sql1);
					if($row1=mysqli_fetch_array($result1))
					$photo=$row1['photo'];
					?>	
						
							<a class="logo" href="index.php">   <table border=0 width=160%><tr><td><img src="img/logo/logo.png"><td align=right><img src=<?php echo "photo/$photo"; ?> width=40% height=10></table> 
						</div><!--  End Col -->
						
						<div class="col-xs-12 col-sm-12 col-md-9 text-right">
							<div class="menu_wrap">
								<div class="main-menu">
									<nav>
										<ul>
											<li><a href="customer_home.php">home</a>					
											</li>
												<li><a>Account<i class="fa fa-angle-down"></i></a>
												<!-- Sub Menu -->
												<ul class="sub-menu">
													<li><a href="account.php">Account</a></li>
													<li><a href="profile.php">Profile</a></li>
													</ul>
													
													</li>
													</li>											
											
											<li><a>Product <i class="fa fa-angle-down"></i></a>
												<!-- Sub Menu -->
												<ul class="sub-menu">
													<li><a href="padd.php">Product Add </a></li>
													<li><a href="pdelete.php">Product delete</a></li>
													
													
													
												</ul>
											</li>
											
											
											<li><a>View<i class="fa fa-angle-down"></i></a>
												<!-- Sub Menu -->
												<ul class="sub-menu">
													<li><a href="feedback.php">Feedback</a></li>
													<li><a href="rate.php">Rate</a></li>
													
													
													
													
												</ul>
											</li>
							
											</li>
											
											<li><a href="message.php">Message</a></li>
											<li><a href="logout.php">logout</a></li>
										</ul>
										
									</nav>
									
									
								</div> <!--  End Main Menu -->					

                                   <div class="right_menu">
									<ul class="nav justify-content-end">
										<li>
											<div class="search_icon">
												<i class="fa fa-search search_btn" aria-hidden="true"></i>
												<div class="search-box">
													<form action="#" method="get">
														<div class="input-group">
															<input type="text" class="form-control"  placeholder="enter keyword"/>				
															<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>			
														</div>
													</form>
												</div>
											</div>
										</li>
										
										<li>
											
									
								
											<div class="cart_menu_area">
												<div class="cart_icon">
													<a href="#"><i class="fa fa-shopping-bag " aria-hidden="true"></i></a>
													<span class="cart_number">2</span>
												</div>
												
												
												<!-- Mini Cart Wrapper -->
												<div class="mini-cart-wrapper">
													<!-- Product List -->
													<div class="mc-pro-list fix">
														<div class="mc-sin-pro fix">
															<a href="#" class="mc-pro-image float-left"><img src="img/mini-cart/1.jpg" alt="" /></a>
															<div class="mc-pro-details fix">
																<a href="#">This is Product Name</a>
																<span>1x$25.00</span>
																<a class="pro-del" href="#"><i class="fa fa-times-circle"></i></a>
															</div>
														</div>
														
													</div>
													
													<!-- Cart Button -->
													
												</div>											
											</div>			
												
												
																								
											</div><br>


								<?php  echo "<font size=4 color=green>Welcome   $type : $usr_name";?>




							</div><!--  End Col -->										
					</div>
				</div>
			</div>
		</header>
		<!--  End Header  -->