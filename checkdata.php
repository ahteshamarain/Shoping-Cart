<?php 
include("config.php");

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$bill = $_POST['city'];
$shipping = $_POST['shipping'];
$card = $_POST['card'];

$insert = "INSERT into `checkout` (`name` , `email` , `address` , `phone` , `city` , `shipping` , `card` , `user_id`) VALUES ('$name' , '$email' , '$address' , '$phone' , '$bill' , '$shipping' , '$card' , '$id')";
$result = mysqli_query($connection, $insert);
if($result){
    echo "your order has been placed";
}
else{
    echo "error in this data";

}
?>