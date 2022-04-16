<?php
include "include/back_imp.php";
error_reporting(0);
// auto login if username cookie is found-------------
$c_username = $_COOKIE['username'];
$user_match = "SELECT firstname FROM user_accounts WHERE firstname = '$c_username'";
$exe_um = $op_conn->query($user_match);
if($exe_um->num_rows > 0)
{
    header("location: dashboard.php");
}
// auto login if username cookie is found-------------
// empty message variables-------------------------------------------
$login_status = " ";
// empty message variables-------------------------------------------
if(isset($_POST['login']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  // ----------------------encrypting password--------------------------------------
  $enc_pwd = crypt($password,'$5$rounds=5000$heyladiesdropitdown$');
  // ----------------------encrypting password--------------------------------------

$creds = "SELECT username,firstname,email,password FROM user_accounts WHERE username = '$username' OR email = '$username'";
$cred_id = $op_conn->query($creds);
if($cred_id->num_rows > 0)
{
 while($cred_ow = $cred_id->fetch_assoc())
 {
   $pwd = $cred_ow['password'];
   if($enc_pwd == $pwd)
   {
     setcookie('username',$cred_ow['firstname'],time() + (86400 * 5), '/'); // cookie valid till 5 days
     header('location: dashboard.php');
   }
   else
   {
     $login_status = "Wrong password";
   }
 }
}
else
{
  $login_status = "No account is linked to this username/Email";
}
}
include "include/header.php";
include "html/index.php";
include "include/footer.php";
 ?>
