<?php 

include('config.php');
session_start();
?>
						<!-- logo -->
						<div class="site-logo">
							<a href="index.php">
								<img src="assets/img/logo-img.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
							<?php 
							if(isset($_SESSION['user_email'])){

							
							?>
								<li class="current-list-item"><a href="index.php">Home</a>
								
								</li>
								<li><a href="about.php">About</a></li>
							
							
								<li><a href="contact.php">Contact</a></li>
								<li><a  href="shop.php">Shop</a>
									<ul class="sub-menu">
										<li><a href="shop.php">Shop</a></li>
										<li><a href="checkout.php">Check Out</a></li>
										<li><a href="single-product.php">Single Product</a></li>
									</ul>
								</li>
								<?php 
								$current_user_id = $_SESSION['user_id'];
								$count = mysqli_query($connection, "SELECT count(cart_id) as total_cart from `cart` where `user_id` = '$current_user_id'");
								if(mysqli_num_rows($count) > 0){
									$cart_count = mysqli_fetch_assoc($count);
									// print_r($cart_count);
								}
								
								?>
								<a class="shopping-cart" href="cart.php"><i style="color:white;" class="fas fa-shopping-cart"></i><sup><?php echo $cart_count['total_cart']?></sup></a>								
								<li><a><?php echo $_SESSION['user_fname']. " " .$_SESSION['user_lname'] ?></a>
									<ul class="sub-menu">
									<li><a href="cart.php">Cart</a>
									<li><a href="order.php">Orders</a></li>
									<li><a href="checkorder.php">Cancelled Orders</a></li>
									<li><a href="user-profile.php">User Profile</a></li>
									<li><a href="changepass.php">Change password</a></li>
									<li><a href="user-lgout.php">Log out</a></li>


									</ul>
								</li>
									<?php 
									}else{

									
									?>
									<li class="current-list-item"><a href="index.php">Home</a>
								
								</li>
								<li><a href="about.php">About</a></li>
								<li><a >Shop</a>
									<ul class="sub-menu">
										<li><a href="shop.php">Shop</a></li>
										<li><a href="single-product.php">Single Product</a></li>
									</ul>
								</li>
								<li><a href="shop.php">Registration</a>
									<ul class="sub-menu">
									<li><a href="sign.php">Sign up</a></li>

										<li><a href="user-login.php">Sign In</a></li>

									</ul>
								</li>
								<li>
									
									<div class="header-icons">
										<a class="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart"></i></a>								
									</div>
								
									
								</li>
								<?php 
									}
								?>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
    <!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				
                    
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->
















