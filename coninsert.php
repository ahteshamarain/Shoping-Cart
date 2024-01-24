<?php 
include("config.php");

if(isset($_POST["adddata"])){
     $name =$_POST['name'];
    $email =$_POST["email"];
    $phone =$_POST["phone"];
    $subject =$_POST["subject"];
    $message =$_POST["message"];



   
    $insert = "INSERT into `contact` (`name` , `email` , `phone` , `subject`, `message`) VALUES ('$name' , '$email' , '$phone' , '$subject' , '$message')";
$res=mysqli_query($connection,$insert);
if($res){
    echo '<script>
    alert("Your information has been submit")
    window.location.href="contact.php"
    </script>';
}

}
?>