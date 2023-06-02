<?php
include 'connect.php';
$email = $_POST['email'];
$name = $_POST['name'];
$u_id = $_POST['id'];
$sql = "INSERT INTO `category` (user_id, name) 
VALUES ('$u_id','$name')";
$result = mysqli_query($con,$sql);
if($result)
{
    header("location: http://localhost/clg_project/php/dashboard/examples/wallet.php?email=$email");
}
?>