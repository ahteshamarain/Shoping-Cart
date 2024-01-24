<?php 
session_start();

if(isset($_SESSION['user_id'])){
    header('location:user-login.php');
  }



session_unset();
session_destroy();
?>