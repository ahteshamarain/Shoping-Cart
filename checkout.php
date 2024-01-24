<?php 

include("include/header.php");
include("include/navbar.php");
include("config.php");

$current_user_id = $_SESSION['user_id'];
$fetch = "SELECT * from `userdata` where `id` = '$current_user_id'";
$result = mysqli_query($connection,$fetch);
if($result){
	if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_assoc($result);
	}
}

?>
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Check Out Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Billing Address
						        </button>
						      </h5>
						    </div>
							<?php
							$user_id = $_SESSION['user_id'];
							?>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
						        	<form action="index.php">
									  <input type="hidden" id="user_id" value="<?php echo $user_id  ?>">
										
						        		<p><input id="bname" type="text" placeholder="Name" value="<?php echo $row['fname'] ." ". $row['lname']?>"></p>
						        		<p><input id="bemail" type="email" placeholder="Email" value="<?php echo $row['email']?>" ></p>
						        		<p><input id="baddress" type="text" placeholder="Address"></p>
						        		<p><input id="bphone" type="number" placeholder="Phone" value="<?php echo $row['phone']?>"></p>
										<div style="height: 60px;" class="input-group mb-3">
										<label class="input-group-text" for="inputGroupSelect01">Options</label>
										<select  class="form-select" id="cityselect">
											<option selected>Choose your city</option>
											<option value="karachi">Karachi</option>
											<option value="lahore">Lahore</option>
											<option value="islamabad">Islamabad</option>
											<option value="hydrabad">Hydrabad</option>
											<option value="faislabad">Faislabad</option>
											<option value="peshawar">Peshawar</option>
											<option value="quetta">Quetta</option>
											<option value="multan">Multan</option>
											<option value="jhang">Jhang</option>
											<option value="raheem-yaar-khan">Raheem-Yaar-Khan</option>
											<option value="khyberpakhtoonkhwa">Khybar-pakhtoon-khwa</option>


										</select>
										</div>
									</form>
						        </div>
						      </div>
						    </div>
						  </div>
						  <div class="card single-accordion">
						    <div class="card-header" id="headingTwo">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          Shipping Address
						        </button>
						      </h5>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="shipping-address-form">
								<p><input id="bshipping" style="width: 690px;height: 65px;" type="number" placeholder="Shipping tracking number details"></p>
						        	
						        </div>
						      </div>
						    </div>
						  </div>
						  <div class="card single-accordion">
						    <div class="card-header" id="headingThree">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          Card Details
						        </button>
						      </h5>
						    </div>
						    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="card-details">
								<p><input id="bcard" style="width: 690px;height: 65px;" type="number" placeholder="Your card details goes here."></p>
						        </div>
						      </div>
						    </div>
						  </div>
						</div>
						<br>
						<a id="checkout" class="boxed-btn">Place Order</a>

					</div>
				</div>
				

			
							
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end check out section -->

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
<script src="js/checkout.js"></script>
