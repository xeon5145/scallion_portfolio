<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "onion_portfolio";
$op_conn = mysqli_connect($servername,$username,$password,$db);
//checking connection
if ($op_conn->connect_error)
{
die("Unable to Connect database: " .$op_conn->connect_error);
}
 ?>
