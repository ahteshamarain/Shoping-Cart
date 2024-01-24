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
						<p>best quality ever</p>
						<h1>Cancelled Orders</h1>
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
			<a href="order.php" class="boxed-btn mb-5">Check Orders</a>
			</div>

			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									
									
									<th class="product-name">Name</th>
									<th class="product-price">Email</th>
									<th class="product-price">Address</th>
									<th class="product-total">City</th>
									<th class="product-total">Product name</th>
									<th class="product-total">Restore</th>
									<th class="product-total">Delete</th>
                                    

								</tr>
							</thead>

				
                <?php 
			$user_id = $_SESSION['user_id'];
			$pname =$_SESSION['pname'];

			$data = "SELECT * FROM `checkout` WHERE `user_id` = '$user_id' AND `status` = 0";
                
                $data = mysqli_query($connection, $data);
                
                if ($data) {
                    if (mysqli_num_rows($data) > 0) {
                        while ($row = mysqli_fetch_assoc($data)) {
                ?>
							<tbody>
                            <tr class="table-body-row">
                <td class="product-name"><?php echo $row['name']?></td>
                <td class="product-price"><?php echo $row['email']?></td>
                <td class="product-price"><?php echo $row['address']?></td>
                <td class="product-total"><?php echo $row['city']?></td>
                <td class="product-total"><?php echo $pname ?></td>
                <td>
    <a href="status.php?rid=<?php echo $row['id']; ?>">
        <button class="product-total btn btn-primary">Restore order</button>
    </a>
</td>

                <td>
    <a href="status.php?did=<?php echo $row['id']; ?>">
        <button class="product-total btn btn-danger">Delete order</button>
    </a>
</td>
                </tr>
							</tbody>
							<?php
						}
					}
				}
							?>
               
							</tbody>
						</table>
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