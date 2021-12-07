<?php
include "include/back_imp.php";
// error_reporting(0);
if(isset($_POST['login']))
{
  echo $username = $_POST['username'];
  echo $password = $_POST['password'];

$creds = "SELECT username,email,password FROM user_accounts";
$cred_id =
}

include "html/index.php";
 ?>
