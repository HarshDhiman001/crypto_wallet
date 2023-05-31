<?php
include 'connection.php';
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];
$sql = "INSERT INTO `users` (name, email, password, phone, address, pincode) 
VALUES ('$name', '$email', '$password', '$phone', '$address', '$pincode')";
$result = mysqli_query($con,$sql);
if($result)
{
    header("location: http://localhost/clg_project/php/login.php");
}
else
{
    echo "not done";
}
?>