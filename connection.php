<?php
$con = mysqli_connect("localhost", "root", "", "assetmanager");
if(!$con)
{
    die("can't connect to the database!".mysqli_connect_error($con));
}
else
{
    echo "connection successful!";
}
?>