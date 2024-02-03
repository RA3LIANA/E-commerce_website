<?php

include ('header.php');
include('../shared/connection.php');

$status = mysqli_query($conn, "SELECT * FROM product");

if (mysqli_num_rows($status) > 0) {
    echo "<body class='vh-100' style='background-image: url(image.jpg); background-repeat: no-repeat; background-size: cover;'>
            <h1 class='text-center card m-5' style='opacity:90%;'>Manage Products</h1>
            <table class='table table-striped table-bordered table-hover table-sm table-dark text-center'>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Vendor ID</th>
                    <th>Price</th>
                    <th>Detail</th>
                    <th>Action</th>

                </tr>
            </thead>";
    while ($row = mysqli_fetch_assoc($status)) {
        $imgpath=$row['imgpath'];
        $pid = $row['pid'];
        $name = $row['name'];
        $uploaded_by = $row['uploaded_by'];
        $price = $row['price'];
        $detail = $row['detail'];

        echo "<tbody><tr>
                <td><div class='card m-2' style='width: 5rem;'><img src='$imgpath' alt='...'></div></td>
                <td>$pid</td>
                <td>$name</td>
                <td>$uploaded_by</td>
                <td>$price</td>
                <td>$detail</td>
                <td><a href='../vendor/deleteproduct.php?pid=$pid' class='btn btn-light'>Delete</a></td>
                </tr><tbody>";
    }
    echo "</table></body>";
    echo "</table>";
} else {
    echo "No products uploaded yet.";
}
?>