<?php
$conn = mysqli_connect("localhost","root","","employee");
if(mysqli_connect_errno())
{
    die("connection failed:");

}
echo "Connected successfully";
?>