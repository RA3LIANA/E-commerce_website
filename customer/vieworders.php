<?php

include "menu.php";
include "../shared/connection.php";

$userid = $_SESSION['userid'];

$result = mysqli_query($conn, "SELECT * FROM orders WHERE userid = $userid");
?>


<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body class='bg-secondary'>
    <h1 class='text-center text-light'>My Orders</h1>
    <table class='table table-striped table-bordered table-hover table-sm table-dark text-center'>
        <thead>
            <tr>
                <th>Image</th>
                <th>Order ID</th>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Vendor ID</th>
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
                $vendorid = $row['uploaded_by'];
                $price = $row['price'];

                echo "<tr>";
                echo "<td><div class='card m-2' style='width: 5rem;'><img src='$imgpath' alt='...'></div></td>";
                echo "<td>$orderid</td>";
                echo "<td>$pid</td>";
                echo "<td>$name</td>";
                echo "<td>$vendorid</td>";
                echo "<td>Rs $price</td>";
                echo "<td><a href='reviewproduct.php?orderid=$orderid' class='btn btn-light'>Review Product</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <h5 class='text-center text-light'> Thank You for Ordering from this Website </h5>
<?php include('../shared/footer.html'); ?>
</body>
</html>
