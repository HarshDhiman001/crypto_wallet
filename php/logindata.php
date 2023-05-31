<?php
include 'connection.php';
$email = $_POST['email'];
$password = $_POST['password'];
$sql="SELECT * FROM `users` WHERE email LIKE '$email' AND password LIKE '$password'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
    session_start();
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    header("location: http://localhost/clg_project/php/dashboard/examples/header.php?email=$email");
}
else
{
    echo "not";
}
?>