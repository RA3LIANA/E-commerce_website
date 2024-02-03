<?php
include "menu.php";
include "../shared/connection.php";

$result=mysqli_query($conn,"select * from cart join product on cart.pid=product.pid  where userid=$userid");

while($row=mysqli_fetch_assoc($result))
{
    $cartid=$row['cartid'];
    $pid=$row['pid'];
    $name=$row['name'];
    $price=$row['price'];
    $qty=$row['qty'];
    $detail=$row['detail'];
    $imgpath=$row['imgpath'];
    $uploaded_by=$row['uploaded_by'];

    $status=mysqli_query($conn,"insert into orders(userid,pid,name,price,detail,imgpath,uploaded_by) values($userid,$pid,'$name',$price,'$detail','$imgpath',$uploaded_by)");

    if($status)
    {
        echo "$name is added to Order Successfully!<br>";
    }
}



?>