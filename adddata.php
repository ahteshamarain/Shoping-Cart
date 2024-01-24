<?php 
session_start();
include('config.php');

if(!isset($_SESSION['user_id'])){
	
	echo"login first";
	
    exit();

}
include("config.php");


$userid = $_POST['user_id'];
$proid = $_POST['pro_id'];
$pname = $_POST['pname'];
$pquantity = $_POST['pquantity'];
$pprice = $_POST['pprice'];
$total = ($pquantity * $pprice);

$newsubtotal = +$total;



$check_product = mysqli_query($connection, "SELECT * from `cart` where `pro_id` = '$proid'");
if(mysqli_num_rows($check_product) > 0){
    echo "Product already exist";
}else{

    
    
    $insert="INSERT INTO `cart` (`cart_id`, `pro_name`, `Pro_price`,`pquantity`,`ptotal`, `subtotal` , `user_id`, `pro_id`) VALUES (NULL, '$pname', '$pprice','$pquantity','$total', '$newsubtotal', '$userid', '$proid')
";
$result=mysqli_query($connection, $insert);
if($result){
    echo "cart added successfully";
}else{
    echo "failed to add category";
}

}

?>