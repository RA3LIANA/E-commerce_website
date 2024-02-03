<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .auth-parent
        {
            display:flex;
            justify-content:space-around;
        }
    </style>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>
<body style="background-image:url(../shared/register.jpg); background-repeat: no-repeat; background-size: cover;">
<header>    <?php include "menu.php";?>     </header>
<div class="d-flex justify-content-center align-items-center vh-100">
    <form enctype="multipart/form-data" action="upload.php" method="post" class="w-25 card p-3" style="opacity: 90%;">
        <p class="card-header text-center fw-bold fs-5"> Please Upload Your Product Details </p>
        <input required class="form-control mt-2" type="text" name="name" placeholder="Product Name">
        <input required class="form-control mt-2" type="number" name="price" placeholder="Product Price">
        <textarea required class="form-control mt-2" name="detail" id="" cols="30" rows="5" placeholder="Describe the Product"></textarea>
        <input required class="form-control mt-2" name="pdtimg" type="file" accept=".jpg">
        <div class="text-center">
            <button class=" mt-3 btn btn-danger">Upload</button>
        </div>
    </form>
</div>
<footer>    <?php include('../shared/footer.html'); ?>      </footer>

</body>
</html>
