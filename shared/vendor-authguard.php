<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .auth-parent
        {
            display:flex;
            justify-content:space-around;
            background-color:beige;
        }
    </style>
</head>
<body class="bg-secondary"></body>
</html>
<?php
    session_start();
    if(!isset($_SESSION['login_status']))
    {
        echo "Illegal attempt";
        die;
    }
    if($_SESSION['login_status']==false)
    {
        echo "Login Failed; Unauthorised Attempt";
        die;
    }
    if($_SESSION['usertype']!='vendor')
    {
        echo "Unauthorized USER Type";
        die;
    }

    $userid=$_SESSION['userid'];
    $username=$_SESSION['username'];
    $usertype=$_SESSION['usertype'];
    echo "<div class='auth-parent'>
        <div>Userid:$userid</div>
        <div>Username:$username</div>
        <div>$usertype</div>
    </div>";

?>