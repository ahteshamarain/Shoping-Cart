<?php 
include("config.php");
$query = $_POST['query'];

$fetch = "SELECT * from `userdata` where `fname` like '%$query%'";

$result = mysqli_query($connection , $fetch);
if($result){
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            echo '
            <tr>
                <td>' . $row['id'] . '</td>
                <td>' . $row['fname'] . '</td>
                <td>' . $row['lname'] . '</td>
                <td>' . $row['email'] . '</td>
                <td>
                <button type="button" class="btn btn-primary edit"data-id="' . $row['id'] . '" data-bs-toggle="modal" data-bs-target="#updatedata">
                Update
                </button>
                </td>
                <td>
                    <button class="btn btn-danger delete" data-id="' . $row['id'] . '">Delete</button>
                </td>
            </tr>';
        }
    }
}
?>