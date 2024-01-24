<?php 

include("config.php");
include("include/header.php");
include("include/navbar.php");


?>
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="cart-buttons">
			<a href="shop.php" class="boxed-btn mb-5">Continue Shopping</a>
			</div>
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-price">Quantity</th>
									<th class="product-total">Total</th>
								</tr>
							</thead>
							<?php 
				if(isset($_SESSION['user_id'])){

				
				$current_user_id = $_SESSION['user_id'];
				$userid = mysqli_query($connection, "SELECT `user_id` from `cart` where `user_id` = '$current_user_id'");
				if(mysqli_num_rows($userid) > 0){
					$cart_id = mysqli_fetch_assoc($userid);
					// print_r($cart_id);
					
					if($cart_id['user_id'] == $current_user_id){
						
					
				
				?>
							<tbody id="ctab">
					
							</tbody>
							<?php 
							}
						}else{
							?>
							<tbody id="ctab">

							<?php 
						}
					}
							?>
							</tbody>
						</table>
					</div>
				</div>
				

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<?php 
							$fetch = "SELECT sum(ptotal) as `subtotal` from `cart`";
							$result = mysqli_query($connection,$fetch);
							if($result){
								if(mysqli_num_rows($result)>0){
									$row = mysqli_fetch_assoc($result);
									// print_r($row);

								
							?>
							<tbody>
								<tr class="total-data">
									<td><strong>Total: </strong></td>
									<td><?php echo '$'. $row['subtotal']?></td>
								</tr>
								
							</tbody>
							<?php 
								}
							}
						
							?>
						</table>
						<div class="cart-buttons">
							
							<a href="checkout.php" class="boxed-btn black">Check Out</a>
						</div>
					</div>

					
				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->

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