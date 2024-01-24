<?php
// session_start();
include("include/header.php");
include("include/navbar.php");
include("config.php");
?>
<br><br><br><br><br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="assets/css/user.css">


</head>
<body>
    <?php 
	$current_user_id = $_SESSION['user_id'];
    $data = mysqli_query($connection, "SELECT * from `userdata` where `id` = '$current_user_id'");
    if ($data) {
        if (mysqli_num_rows($data) > 0) {
           
    ?>
<div class="container">
<div class="row gutters">
	<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
		<div class="card h-100">
			<div class="card-body">
				<div class="account-settings">
					<div class="user-profile">
                 
                    
                      
						<div class="user-avatar">
							<img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Maxwell Admin">
						</div>
                        <?php 
                        while( $row = mysqli_fetch_assoc($data) ){
                        ?>
						<h5 style="color:white;" class="user-name"><?php echo $row['fname'] . $row['lname']?></h5>
						<h6 style="color:white;" class="user-email"><?php echo $row['email']?></h6>
					</div>
				
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
		<div class="card h-100">
			<div class="card-body">
				<div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<h6 style="color:white;" class="mb-3 text-primary">Personal Details</h6>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<h3 style="color:white;">First Name : <?php echo $row['fname']?></h3>
                            <h3 style="color:white;">Last Name : <?php echo $row['lname']?></h3>
                            <h3 style="color:white;">Email : <?php echo $row['email']?></h3>
                            <h3 style="color:white;">Phone : <?php echo $row['phone']?></h3>

						</div>
					</div>
                   
                    
				
                    
			
				
				</div>
              
			<br>
				<div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						
					</div>
				</div>
			</div>
		</div>
	</div>
    <?php 
                         }
                        }
                        }
                ?>
</div>
</div>











</body>
</html>
<br><br>

<?php
include("include/footer.php");
?>