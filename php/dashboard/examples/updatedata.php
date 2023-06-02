<?php
include 'connect.php';
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$country = $_POST['country'];
$sql = "UPDATE `users` SET `name` = '$name', `email` = '$email', `phone` = '$phone', `address` = '$address', `country` = '$country' 
WHERE `users`.`id` = $id";
$result = mysqli_query($con,$sql);
if($result)
{
    header("location: http://localhost/clg_project/php/dashboard/examples/user.php?email=$email");
}
else
{
    echo "sorry";
}   
?>