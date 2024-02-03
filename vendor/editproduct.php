<?php
include "menu.php";
$userid = $_SESSION['userid'];
$pid = $_GET['pid'];
include_once "../shared/connection.php";

$status=mysqli_query($conn,"SELECT * FROM product WHERE pid=$pid AND uploaded_by=$userid");

if (mysqli_num_rows($status) == 1) {
    $row = mysqli_fetch_assoc($status);
    $name = $row['name'];
    $price = $row['price'];
    $detail = $row['detail'];
    $imgpath = $row['imgpath'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updatedName = $_POST['name'];
    $updatedPrice = $_POST['price'];
    $updatedDetail = $_POST['detail'];

    $updateResult = mysqli_query($conn, "UPDATE product SET name='$updatedName', price=$updatedPrice, detail='$updatedDetail' WHERE pid=$pid AND uploaded_by=$userid");

    if ($updateResult) {
        header("location: view.php");
        exit;
    } else {
        echo "Failed to update the product!<br>";
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Product</title>
</head>
<body style="background-image:url(../shared/register.jpg); background-repeat: no-repeat; background-size: cover;">
<div class="d-flex justify-content-center align-items-center vh-100">
    <form enctype="multipart/form-data" action="upload.php" method="post" class="w-25 card p-3" style="opacity: 90%;">
        <p class="card-header text-center fw-bold fs-5"> Edit Details </p>
        <input required class="form-control mt-2" type="text" name="name" placeholder="Product Name">
        <input required class="form-control mt-2" type="number" name="price" placeholder="Product Price">
        <textarea required class="form-control mt-2" name="detail" id="" cols="30" rows="5" placeholder="Describe the Product"></textarea>
        <div class="text-center">
            <button class=" mt-3 btn btn-danger">Edit</button>
        </div>
    </form>
</div>
</body>
</html>

<?php
include('../shared/footer.html');
?>
