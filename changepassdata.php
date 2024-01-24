<?php 
include("config.php");



if (isset($_POST["register"])) {
    $cpass = $_POST['pass'];
    $npass = $_POST['npass'];
    $rpass = $_POST['rpass'];

  

    // Validate and sanitize input if necessary
    if ($npass == $rpass) {
        $verify = "SELECT * FROM `userdata` where `password`= '$cpass'";
        $data = mysqli_query($connection, $verify);

        if ($data) {
            if (mysqli_num_rows($data) > 0) {
                $row = mysqli_fetch_assoc($data);
                $dbpass = $row["password"];   
                $userid = $row["id"]; 
                
                // $verifypass = password_verify($cpass, $dbpass);

                if ($cpass == $dbpass) {
                    $hashedPassword = password_hash($npass, PASSWORD_BCRYPT);
                    // Hash the new password
                    
                    // $hashedPassword = password_hash($npass, PASSWORD_BCRYPT);

                    // Add WHERE clause to specify the admin record to update
                    $update = "UPDATE `userdata` SET `password` = '$hashedPassword' WHERE `id` = '$userid'"; // Replace 'admin_id' with your actual identifier
                    $result = mysqli_query($connection, $update);

                    if ($result) {
                        echo '<script>
                        alert("password Update successful")
                        window.location.href="index.php"
                        </script>';
                    } else {
                        echo '<script>
                        alert("Error updating password")
                        window.location.href="changepass.php"
                        </script>';
                    }
                } else {
                    echo '<script>
                    alert("Current password does not match")
                    window.location.href="changepass.php"
                    </script>';
                }
            } else {
                echo '<script>
                alert("Data not found")
                window.location.href="changepass.php"
                </script>';
            }
        } else {
            echo '<script>
            alert("Error in query")
            window.location.href="changepass.php"
            </script>';
        }
    } else {
        echo '<script>
        alert("New password and confirm password do not match")
        window.location.href="changepass.php"
        </script>';
    }
} else {
    echo '<script>
    alert("Form not submitted")
    window.location.href="changepass.php"
    </script>';
}



?>