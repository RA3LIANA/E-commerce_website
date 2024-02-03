<?php

include "menu.php";
include "../shared/connection.php";

$uploaded_by = $_SESSION['userid'];

$result = mysqli_query($conn, "SELECT * FROM orders WHERE uploaded_by = $uploaded_by");
?>


<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h1 class='text-center'>Orders</h1>
    <table class='table table-striped table-bordered table-hover table-sm table-dark text-center'>
        <thead>
            <tr>
                <th>Image</th>
                <th>Order ID</th>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Customer ID</th>
                <th>Price</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $imgpath=$row['imgpath'];
                $orderid = $row['orderid'];
                $pid = $row['pid'];
                $name = $row['name'];
                $customerid = $row['userid'];
                $price = $row['price'];

                echo "<tr>";
                echo "<td><div class='card m-2' style='width: 5rem;'><img src='$imgpath' alt='...'></div></td>";
                echo "<td>$orderid</td>";
                echo "<td>$pid</td>";
                echo "<td>$name</td>";
                echo "<td>$customerid</td>";
                echo "<td>$price</td>";
                echo "<td><a href='delivered.php?orderid=$orderid' class='btn btn-light'>Mark as Delivered</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
