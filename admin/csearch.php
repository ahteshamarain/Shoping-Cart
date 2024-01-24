<?php
include("config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $query = mysqli_real_escape_string($connection, $_POST['query']);

    $fetch = "SELECT * FROM `category` WHERE `catname` LIKE '%$query%'";

    $result = mysqli_query($connection, $fetch);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                <tr>
                    <td>' . $row['catid'] . '</td>
                    <td>' . $row['catname'] . '</td>
                    <td>' . $row['catdes'] . '</td>;
                    <td>';

            if ($row['catstatus']==1) {
                echo '<span class="bg-light-primary text-dark-primary">active</span>';
            }
            else{
                echo '<span class="bg-light-danger text-dark-danger">deactive</span>';
            }

            echo '</td>
                    <td>' . $row['catdate'] . '</td>

                    <td>
                    <button type="button" class="btn btn-primary edit"data-id="' . $row['catid'] . '" data-bs-toggle="modal" data-bs-target="#updatedata">
                    Update
                    </button>
                    </td>
                    <td><button class="btn btn-danger delete" data-id="' . $row['catid'] . '">Delete</button></td>
                </tr>';
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
