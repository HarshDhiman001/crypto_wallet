<?php 
$server = "localhost";
$username = "root";
$password = "";
$dbname = "clg_project";
$con= mysqli_connect($server,$username,$password,$dbname);
if(!$con)
{
    echo "error in connection";
}

?>