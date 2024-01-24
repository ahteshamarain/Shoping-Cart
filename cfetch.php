<?php 
session_start();
include("config.php");
$data = "SELECT * FROM `cart` AS c INNER JOIN `products` AS p ON c.pro_id = p.pid";
$data = mysqli_query($connection, $data);

if ($data) {
    if (mysqli_num_rows($data) > 0) {
        while ($row = mysqli_fetch_assoc($data)) {
               $_SESSION['pname'] = $row['pro_name'];
            echo '
            <tr class="table-body-row">
                <td class="product-remove delete" data-id="'.$row['cart_id'].'" ><i class="far fa-window-close"></i></td>
                <td class="product-image"><img src="admin/upload/' . $row['pimage'] . '" alt=""></td>
                <td class="product-name">' . $row['pro_name'] . '</td>
                <td class="product-price">$' . $row['Pro_price'] . '</td>
                <td class="product-price">' . $row['pquantity'] . '</td>
                <td class="product-total">$' . $row['ptotal'] . '</td>
                </tr>
           ';
        }
    }
}
?>
