<?php

include "../shared/connection.php";

$orderid = $_GET['orderid'];
$status = mysqli_query($conn, "DELETE FROM orders WHERE orderid = $orderid");
if($status)
{
    echo "Product Deleted Successfully!";
    header("location:vieworders.php");
}
else
{
    echo "Delete Failed";
    echo mysqli_error($conn);
}

?>