<?php
include "menu.php";
include "../shared/connection.php";
$userid=$_SESSION['userid'];
$username=$_SESSION['username'];
$orderid=$_GET['orderid'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Review Product</title>
</head>
<body style="background-image:url(../shared/img1.jpg); background-repeat: no-repeat; background-size: cover;">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <form method="POST" action="review.php" class="w-25 card p-3" style="opacity: 90%;">
        <p class="card-header text-center fw-bold fs-5"> Review Product </p>
        <?php echo "<p class='text-center fw-bold'>User ID : $userid<br> Order ID : $orderid <br> Username : $username </p>" ?>
            <label for="review">Please type order ID again:</label>
            <input name=orderid type="text">
            <br><br>
            <label for="rating">Rating:</label>
            <select name="rating" id="rating" required>
                <option value="">Select Rating</option>
                <option value="5">5 Stars</option>
                <option value="4">4 Stars</option>
                <option value="3">3 Stars</option>
                <option value="2">2 Stars</option>
                <option value="1">1 Star</option>
            </select>
            <br><br>
            <label for="review">Review:</label>
            <textarea name="review" id="review" rows="5" required></textarea>
            <br><br>
            <input type="submit" class='btn btn-secondary'></td>
        </form>
    </div>
</body>
</html>
