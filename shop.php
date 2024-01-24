<?php
// session_start();
include("include/header.php");
include("include/navbar.php");
include("config.php");


?>

<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="breadcrumb-text">
					<p>Fresh and Organic</p>
					<h1>Shop</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end breadcrumb section -->
<?php

$data = mysqli_query($connection, "SELECT * from `category`");
if ($data) {
	if (mysqli_num_rows($data) > 0) {

?>

		<!-- products -->
		<div class="product-section mt-150 mb-50">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="product-filters">
							<ul>
								<!-- <li class="active" data-filter="*">All</li> -->
								<?php
								while ($row = mysqli_fetch_assoc($data)) {
									// print_r($row);
								?>
									<li class="categorybtn" data-filter="<?php echo $row['catid'] ?>">
										<?php echo $row['catname'] ?>
									</li>
						<?php
								}
							}
						}
						?>
							</ul>

						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
		$fetch = "SELECT * from `products`";
		$result = mysqli_query($connection, $fetch);
		if ($result) {
			if (mysqli_num_rows($result) > 0) {


		?>


				<div class="row" id="card">
					
					<?php
					// if userid is available in the session then store the userid in the login_user_id variable
					// otherwise print the product
					if(isset($_SESSION['user_id'])){


					$login_user_id = $_SESSION['user_id'];
					while ($row = mysqli_fetch_assoc($result)) {
					?>
						<div class="col-lg-4 col-md-6 text-center ">
							<div class="single-product-item">
								<div class="product-image">
									<!-- getting user id -->
									<input type="hidden" id="pro_id" value="<?php echo $row['pid'] ?>">
									<input type="hidden" id="user_id" value="<?php echo $login_user_id  ?>">
									<a id="pimage" href="single-product.php?pid=<?php echo $row['pid'] ?>"><img id="pimage" src="admin/upload/<?php echo $row['pimage'] ?>" alt="" height="300px"></a>
								</div>
								<h3 id="pname">
									<?php echo $row['pname'] ?>
								</h3>
								<p id="pprice" class="product-price"><span>1 pics</span>
									<?php echo $row['pprice'] ?>
								</p>
								<a href="single-product.php?pid=<?php echo $row['pid'] ?>" class="cart-btn"><i class="fas fa-shopping-cart"></i>View Products</a>
							</div>
						</div>
			<?php
					}
				}else{
					while ($row = mysqli_fetch_assoc($result)) {
					?>
					<div class="col-lg-4 col-md-6 text-center ">
							<div class="single-product-item">
								<div class="product-image">
									<!-- getting user id -->
									<input type="hidden" id="pro_id" value="<?php echo $row['pid'] ?>">
									<input type="hidden" id="user_id" value="<?php echo $login_user_id  ?>">
									<a id="pimage" href="single-product.php?pid=<?php echo $row['pid'] ?>"><img id="pimage" src="admin/upload/<?php echo $row['pimage'] ?>" alt="" height="300px"></a>
								</div>
								<h3 id="pname">
									<?php echo $row['pname'] ?>
								</h3>
								<p id="pprice" class="product-price"><span>1 pics</span>
									<?php echo $row['pprice'] ?>
								</p>
								<a href="single-product.php?pid=<?php echo $row['pid'] ?>" class="cart-btn"><i class="fas fa-shopping-cart"></i>View Products</a>
							</div>
						</div>
					<?php 
					}
				}
			}
		}
			?>




				</div>

				<!-- <div class="row">
			<div class="col-lg-12 text-center">
				<div class="pagination-wrap">
					<ul>
						<li><a href="#">Prev</a></li>
						<li><a href="#">1</a></li>
						<li><a class="active" href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">Next</a></li>
					</ul>
				</div>
			</div>
		</div> -->

				<!-- end products -->

				<!-- logo carousel -->
				<!-- <div class="logo-carousel-section">
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
</div> -->
				<!-- end logo carousel -->

				<!-- footer -->
				<?php
				include("include/footer.php");
				?>
				<script src="js/addcart.js"></script>