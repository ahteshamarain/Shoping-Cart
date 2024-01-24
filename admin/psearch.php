<?php
include("config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $query = mysqli_real_escape_string($connection, $_POST['query']);

    $fetch = "SELECT * FROM `products` AS p INNER JOIN `category` AS c ON c.catid = p.pcategory WHERE `pname` LIKE '%$query%'";


    $result = mysqli_query($connection, $fetch);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                <tr>
                    <td>'.$row['pid'].'</td>
                    <td>'.$row['pname'].'</td>
                    <td>'.$row['pdes'].'</td>
                    <td>'.$row['pnumber'].'</td>
                    <td>'.$row['catname'].'</td>
                    <td>'.$row['pprice'].'</td>
                    <td><img src="upload/'.$row['pimage'].'" alt="" height="50px" width="50px"></td>               
                    <td><button class="btn btn-primary edit" data-id="'.$row['pid'].'" data-bs-toggle="modal" data-bs-target="#updatedata">Update</button></td>
                    <td><button class="btn btn-danger delete" data-id="'.$row['pid'].'">Delete</button></td>
                </tr>
             
                ';
            }
        } else {
            echo '<tr><td colspan="6">No records found</td></tr>';
        }
    } else {
        // Handle query error
        echo 'Error executing query: ' . mysqli_error($connection);
    }
}

?>
