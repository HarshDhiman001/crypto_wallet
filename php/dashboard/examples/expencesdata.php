<?php
include 'connect.php';
$id = $_POST['id'];
$items = $_POST['items'];
$amount = $_POST['amount'];
$mysql = "SELECT * FROM `users` WHERE `id` LIKE '$id'";
$info = mysqli_query($con,$mysql);
foreach($info as $call)
{
    $email = $call['email'];
    $balance = $call['balance'];
    if($balance > $amount)
    {
        $sqli = "INSERT INTO `expenses` (category_id, user_id, debit) 
        VALUES ('$items', '$id', '$amount')";
        $info = mysqli_query($con,$sqli);
        if($info)
        {
            $sql = "UPDATE `users` SET `balance` = $balance - $amount WHERE `users`.`id` = $id";
            $data = mysqli_query($con,$sql);
            if($data)
            {
                header("location: http://localhost/clg_project/php/dashboard/examples/user.php?email=$email");
            }
            else
            {
                echo "not 3";
            }
        }
        else
        {
            echo "not";
            die;
        }
    }
    else{
        header("location: http://localhost/clg_project/php/dashboard/examples/dashboard.php?email=$email&message=Insufficient Balance");
    }
}
?>