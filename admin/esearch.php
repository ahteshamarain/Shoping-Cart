<?php
include("config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $query = mysqli_real_escape_string($connection, $_POST['query']);

    $fetch = "SELECT * FROM `employeedata` WHERE `efname` LIKE '%$query%'";

    $result = mysqli_query($connection, $fetch);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                <tr>
                    <td>' . $row['eid'] . '</td>
                    <td>' . $row['efname'] . '</td>
                    <td>' . $row['elname'] . '</td>
                    <td>' . $row['eemail'] . '</td>
                    <td>
                        <button type="button" class="btn btn-primary edit" data-id="' . $row['eid'] . '" data-bs-toggle="modal" data-bs-target="#updatedata">
                            Update
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-danger delete" data-id="' . $row['eid'] . '">Delete</button>
                    </td>
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
