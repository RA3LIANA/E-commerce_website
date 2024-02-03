<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .card-text {height:40px; overflow:hidden;}
        .pdt-img {width:19rem; height:19rem;}
    </style>
</head>
<body>
        <script>
            function confirmDelete(pid)
            {
                res=confirm("Are you sure want to Delete?");
                if(res)
                {
                    window.location=`deleteproduct.php?pid=${pid}`;
                }
            }
            function confirmEdit(pid)
            {
                res=confirm("Are you sure want to make changes?");
                if(res)
                {
                    window.location=`editproduct.php?pid=${pid}`;
                }
            }
        </script>
</body>
</html>
<?php

include "menu.php";

$userid=$_SESSION['userid'];
include_once "../shared/connection.php";

$result=mysqli_query($conn,"select * from product where uploaded_by=$userid");
echo "<p class='card-header text-center text-light fw-bold fs-5'> My Items </p>
<div class='d-flex flex-wrap justify-content-center'>";
while($row=mysqli_fetch_assoc($result))
{
    $pid=$row['pid'];
    $name=$row['name'];
    $price=$row['price'];
    $detail=$row['detail'];
    $imgpath=$row['imgpath'];

    echo "<div class='card m-3' style='width: 19rem;'>
            <img class='pdt-img' src='$imgpath' class='card-img-top' alt='...'>
            <div class='card-body'>
                <h5 class='card-title'>$name</h5>
                <h5 class='card-title text-danger'>Rs $price</h5>";

    echo substr($detail, 0, 40).'... <a href="view.php">Read More</a>';

    echo  "<div class='d-flex justify-content-end'>
                    <a class='btn btn-outline-light btn-floating btn-success' onclick='confirmEdit($pid)'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16'  class='bi bi-pencil-fill' viewBox='0 0 16 16'>
                    <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/></svg></a>
                    <a class='btn btn-outline-light btn-floating btn-danger' onclick='confirmDelete($pid)'>&times;</a>
                </div>

            </div>
        </div>";
}
echo "</div>";

include('../shared/footer.html');


?>
