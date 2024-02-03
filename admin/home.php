<?php
include ('header.php');

echo "<body class='vh-100' style='background-image: url(image.jpg); background-repeat: no-repeat; background-size: cover;'>
        <div class='d-flex justify-content-center align-items-center card-img-overlay vh-100'>
            <div class='w-25 card p-3' style='opacity: 90%;'>
                <p class='card-header text-center fw-bold fs-5'>Admin DashBoard</p>
                <div class='text-center'>
                    <a href='manageuser.php'><button class='btn btn-outline-dark my-3 btn-lg col-12'>List of Users</button>
                    <a href='manageproducts.php'><button class='btn btn-outline-dark my-3 btn-lg col-12'>Manage Products</button>
                    <a href='manageorders.php'><button class='btn btn-outline-dark my-3 btn-lg col-12'>Manage Orders</button>
                    <a href='../shared/logout.php'><button class='btn btn-outline-dark my-3 btn-lg col-12'>Log Out</button>
                </div>
            </div>
        </div>
    </body>";
?>