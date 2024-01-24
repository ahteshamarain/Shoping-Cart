<?php 
include("config.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $del = "DELETE from `checkout` where `id` = '$id'";
    $result = mysqli_query($connection,$del);
    if($result){
        echo"
		<script>
		alert('Delete data successfull')
		window.location.href='order.php'
		</script>
		";
    }else{
        echo"
		<script>
		alert('Delete not found')
		window.location.href='order.php'
		</script>
		";
    }
}
?>