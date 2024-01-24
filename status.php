<?php 
include("config.php");

/////// cencelled order//////////
if(isset($_GET["pid"])){

    $pid=$_GET["pid"];

    $update = "UPDATE `checkout` set `status`= 0 where `id`='$pid'";
    $result = mysqli_query($connection,$update);
    if($result){
        echo "
        <script>
        alert('Your order has been cancelled')
        window.location.href='order.php'
        </script>
        ";
    }
}


/////// restore order//////////


if(isset($_GET["rid"])){

    $rid=$_GET["rid"];

    $update = "UPDATE `checkout` set `status`= 1 where `id`='$rid'";
    $result = mysqli_query($connection,$update);
    if($result){
        echo "
        <script>
        alert('Your order has been Restored')
        window.location.href='order.php'
        </script>
        ";
    }
}


/////// delete  order//////////

if(isset($_GET["did"])){

    $did=$_GET["did"];

    $update = "DELETE from `checkout` where `id`='$did'";
    $result = mysqli_query($connection,$update);
    if($result){
        echo "
        <script>
        alert('your order has beendeleted permanently')
        window.location.href='checkorder.php'
        </script>
        ";
    }
}
?>