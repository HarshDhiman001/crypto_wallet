<?php
include 'connection.php';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$sql = "INSERT INTO `users` (name, email, phone, password) 
VALUES ('$name', '$email', '$phone', '$password')";
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