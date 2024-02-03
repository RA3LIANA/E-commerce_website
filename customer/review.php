<?php
include "menu.php";
include "../shared/connection.php";

    $userid=$_SESSION['userid'];
    $name=$_SESSION['username'];

    $orderid=$_POST['orderid'];
    $rating = $_POST['rating'];
    $review = $_POST['review'];

    $status = mysqli_query($conn, "INSERT INTO reviews (userid, orderid, name, rating, review) VALUES ($userid, $orderid, '$name', '$rating', '$review')");
    if ($status) {
        echo "Thank you for submitting your review!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
?>