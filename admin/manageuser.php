<?php
include ('../shared/connection.php');
include ('header.php');

$status = mysqli_query($conn, "SELECT * FROM user");

echo "<body class='vh-100' style='background-image: url(image.jpg); background-repeat: no-repeat; background-size: cover;'>";
echo "<h1 class='text-center my-5 card' style='opacity:75%;'>User Management</h1>";
echo "<table class='table table-striped table-bordered table-hover table-sm table-dark text-center'>";
echo "<tr><th>User ID</th><th>Username</th><th>Usertype</th><th>Action</th></tr>";

while ($row = mysqli_fetch_assoc($status)) {
    $userid = $row['userid'];
    $username = $row['username'];
    $usertype = $row['usertype'];

    echo "<tr><td>$userid</td>";
    echo "<td>$username</td>";
    echo "<td>$usertype</td>";
    echo "<td><button onclick=\"confirmDelete($userid)\">Delete</button></td></tr>";
}
    echo "</table></body>";
?>

<script>
function confirmDelete(userId) {
    var res = confirm("Are you sure you want to delete this user?");
    if (res) {
        window.location.href = "deleteuser.php?userid=" + userid;
    }
}
</script>
