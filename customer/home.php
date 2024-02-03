<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .card-text{height:40px;overflow:hidden;}
        .pdt-img{width:19rem;height:19rem;}
    </style>
</head>
<body class='bg-secondary'>
<script type="text/javascript">

function incrementval(){
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value<10){
        value++;
            document.getElementById('number').value = value;
    }
}
function decrementval(){
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value>1){
        value--;
            document.getElementById('number').value = value;
    }
}
</script>
</body>
</html>
<?php
include "menu.php";

$userid=$_SESSION['userid'];
include_once "../shared/connection.php";

$result=mysqli_query($conn,"select * from product");
echo "<h4 class='text-center text-light'>View All The Products</h4>";
echo "<div class='d-flex flex-wrap justify-content-center'>";
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
    echo substr($detail, 0, 40).'... <a href="home.php">Read More</a></div>';
    echo "<div class='d-flex p-2'>
            <div>Quantity:</div>

            <div class='mx-4'>
            <input type='button' onclick='incrementval()' value='+' />
            <input type='text' name='quantity' value='1' disabled  max='10' size='1' id='number' class='text-center' />
            <input type='button' onclick='decrementval()' value='-' />
            </div>
            <div>
                <a href='addcart.php?pid=$pid&price=$price' class='btn btn-warning btn-outline-light btn-floating'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-basket2' viewBox='0 0 16 16'>
                    <path d='M4 10a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 1 1 2 0v2a1 1 0 0 1-2 0v-2z'/>
                    <path d='M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-.623l-1.844 6.456a.75.75 0 0 1-.722.544H3.69a.75.75 0 0 1-.722-.544L1.123 8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.163 8l1.714 6h8.246l1.714-6H2.163z'/>
                    </svg>
                </a>
            </div>
        </div>
    </div>";
}
echo "</div>";
include('../shared/footer.html');

?>