<?php
include 'connect.php';
$id = $_POST['id'];
$addmoney = $_POST['addmoney'];
$items = $_POST['items'];
$sql = "SELECT * FROM `users` WHERE `id` = $id";
$result = mysqli_query($con,$sql);
foreach($result as $row)
{
    $email = $row['email'];
    $balance = $row['balance'];
    $query = "UPDATE `users` SET `balance` = $balance + $addmoney  WHERE `users`.`id` = $id";
    $add = mysqli_query($con,$query);
    if($add)
    {
        $sqli = "INSERT INTO `expenses`(category_id, user_id, credit) 
        VALUES ('$items','$id', '$addmoney')";
        $data = mysqli_query($con,$sqli);    
        if($data)
        {
            header("location: http://localhost/clg_project/php/dashboard/examples/user.php?email=$email");
        }
    }
}
?>

