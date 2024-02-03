<?php
include ('../shared/connection.php');

$userid = $_GET['userid'];

$status = mysqli_query($conn, "DELETE FROM user WHERE userid = $userid");

if ($status) {
    echo "User with ID $userid has been deleted successfully.";
    header("location:manageuser.php");
} else {
    echo "Failed to delete the user. Please try again.";
}
?>
