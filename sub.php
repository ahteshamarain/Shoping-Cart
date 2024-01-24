<?php 
include("config.php");
if(isset($_POST['ssubmit'])){
	$email = $_POST['semail'];
	$insert = "INSERT into `subscriber` (`email`) VALUE ('$email')";
	$res = mysqli_query($connection,$insert);
	if($res){
		echo"
		<script>
		alert('thanku for your mail')
		window.location.href='index.php'
		</script>
		";
	}else{
		echo"
		<script>
		alert('intercorrect email')
		window.location.href='index.php'

		</script>
		";
	}
}
?>