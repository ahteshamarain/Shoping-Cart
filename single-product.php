<?php 
// session_start();
include("include/header.php");
include("include/navbar.php");
include("config.php");






if(isset($_GET["pid"])){
    $id = $_GET["pid"];
     $pid=$id;
	
	$insert = "SELECT * from `products` where `pid` = '$pid'";
	$result = mysqli_query($connection , $insert);


	if ($result) {
		if (mysqli_num_rows($result) > 0) {
			
		



?>

	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>See more Details</p>
						<h1>Single Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container">
		<?php 
	while ($row = mysqli_fetch_assoc($result)) {
			?>
			<div class="row">
			
				
				
				<div class="col-md-5">
					<div class="single-product-img">
						<img id="pimage" style="height:400px; width: 400px;" src="admin/upload/<?php echo $row['pimage'] ?>" alt="">
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<!-- getting user id -->
						<input type="hidden" id="pro_id" value="<?php echo $pid?>">
						<?php 
						if(isset($_SESSION['user_id'])){
							$login_user_id = $_SESSION['user_id'];
						}else{
							$login_user_id = 0;
						}
						?>
						<input type="hidden" id="user_id" value="<?php echo $login_user_id?>">
						<h3 id="pname"><?php  echo $row['pname'] ?></h3>
						<div  class="single-product-pricing">
							<div style=" display: flex;">
							<h3>$</h3>
							<p id="pprice" class="single-product-pricing"><?php echo $row['pprice'] ?></p>
							</div>
						</div>
				
						<p id="pdes"><?php echo $row['pdes'] ?></p>
						
						<input id="pquantity" type="number" placeholder="0" required>
						
						<div class="single-product-form">
							
						<input type="submit" id="addcart" class="cart-btn" value="Add to Cart">
							<!-- <a href="" id="addcart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a> -->
						
						</div>
						<h4>Share:</h4>
						<ul class="product-share">
							<li><a href="https://web.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://pk.linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<?php 
		}
	}
}
}
	
			?>
		</div>
	</div>
	<!-- end single product -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->
	<?php 
include("include/footer.php");
?>
<script src="js/addcart.js"></script>