<?php
include "menu.php";
include "../shared/connection.php";

$total=0;
$result=mysqli_query($conn,"select * from cart join product on cart.pid=product.pid  where userid=$userid");
echo "<h4 class='text-center text-light'>What's in Your Cart</h4>";
echo "<body class='bg-secondary'><div class='d-flex flex-wrap justify-content-center'>";
while($row=mysqli_fetch_assoc($result))
{
    $cartid=$row['cartid'];
    $pid=$row['pid'];
    $name=$row['name'];
    $price=$row['price'];
    $qty=$row['qty'];
    $imgpath=$row['imgpath'];

    $total=$total+$price;

    echo "<div class='card m-2' style='width: 15rem;'>
            <img class='pdt-img' src='$imgpath' class='card-img-top' alt='...'>
            <div class='card-body'>
                <h5 class='card-title'>$name</h5>
                <h5 class='card-title text-info'>Quantity:$qty</h5>
                <h5 class='card-title text-danger'>Rs $price</h5>
                <a href='deletecart.php?cartid=$cartid' class='btn btn-danger name='remove'>Remove</a>
            </div>
</div>";
}

echo "</div>";

echo "<div class='place-order gap-3 p-3 m-3 bg-dark text-center w-25'>
        <div class='display-6 text-white mb-2'>Total = Rs.$total</div>
        <a href='placeorder.php'>
            <button class='btn btn-success'>Place Order</button>
        </a>
</div></body>";
include('../shared/footer.html');
?>