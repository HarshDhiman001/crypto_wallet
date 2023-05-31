<?php
include 'connect.php';
$email = $_POST['email'];
$name = $_POST['name'];
$balance = $_POST['balance'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$country = $_POST['country'];
$sql = "UPDATE `users` SET `name` = '$name', `email` = '$email', `password` = '$password', 
`phone` = '$phone', `address` = '$address',`balance` = $balance, `country` = '$country '
WHERE `users`.`email` = $email";
$result = mysqli_query($con,$sql);
if($result)
{
    echo "updated";
}
else
{
    echo "sorry";
}   
?>