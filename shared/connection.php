<?php

$conn=new mysqli("localhost","rosalina","Adyasha123.","rosalina");

if($conn->connect_error)
{
    echo "Connection Failed!, Aborting Execution";
    die;
}

?>